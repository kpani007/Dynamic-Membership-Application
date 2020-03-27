<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SectionService;
use App\Services\ResponseService;
use App\Models\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('start');
    }

    public function show($slug)
    {
        Session::put(['current_section_url' => $slug]);
        return view('apply');
    }

     public function store(Request $request)
    {
        $institution = \App\Models\Institution::where('user_id', Auth::user()->id)->first();
        $sections = SectionService::getSections();
        $responses = ResponseService::getResponses();
        $current_section_url = Session::get('current_section_url', 'default');
        foreach($sections as $section)
        {
            foreach($section->fields as $field)
            {
                $answer = new Response;
                switch (!is_null($answer::where(['institution_id' => $institution->id, 'field_id' => $field->id])->first()))    //check whether data already exist
                {
                    case true:
                        $answer = Response::find($responses->where('field_id', $field->id)->first()['id']); // update
                        break;
                }
                if (!empty($request->input($field->slug)) || !empty($request->file($field->slug))) 
                {
                    switch ($field->input_type->name) {
                        case 'matrix':
                            $answer->answer = json_encode($request->input($field->slug));
                            break;
                        case 'file':
                        $this->validate($request, [
                            $field->slug => 'mimes:jpeg,bmp,png', //only allow this type extension file.
                        ]);
                            $file = $request->file($field->slug);
                            $new_name = Str::slug($institution->name_english).'-'.$institution->id.'.'. $file->getClientOriginalExtension();
                            $file->storeAs('accreditations', $new_name);
                            $answer->answer = $new_name;
                            
                            break;
                        default:
                            $answer->answer = implode(',', (array) $request->input($field->slug));
                            break;
                    }
                    $answer->institution_id  = $institution->id;
                    $answer->field()->associate($field)->save();
                }
            }
        }

        $current_section = $sections->where('slug', $current_section_url)->first();
        $next_section_id = $sections->where('id', '>', $current_section->id)->min('id');
        //var_dump($next_section_id);
        $next_section = $sections->where('id', $next_section_id)->first();
        if ($current_section->id < $next_section_id) 
            return redirect(route('apply.show', $next_section->slug));
        return redirect(route('review.index'));
    }
}
