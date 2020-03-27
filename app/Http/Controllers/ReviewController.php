<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationEmail;
use App\Mail\UpdateConfirmationEmail;
use Illuminate\Http\Request;
use App\Services\InstitutionService;
use App\Services\ResponseService;
use App\Models\Institution;
use Illuminate\Support\Facades\Auth;
use PDF;

class ReviewController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('review');
    }

    public function store(Request $request)
    {
        $institution_id = InstitutionService::getCurrentInstitution()->id;
        $institution = Institution::find($institution_id);
        $current_status = $institution->status;
        $institution->status = "Submitted";
        $institution->save();
        $current_status != 'Not Submitted' ? \Mail::to($institution->user->email)->send(new UpdateConfirmationEmail($institution)) : \Mail::to($institution->user->email)->send(new ConfirmationEmail($institution));
        $pdf = PDF::loadView('pdfs.review')->setPaper('a4');
        $pdf->download($institution->name_english. '.pdf');
      
       Auth::logout();
    //     redirect('/');
    return $pdf->stream();

    }

    private function downloadPDF($filename)
    {
        $pdf = PDF::loadView('pdfs.review')->setPaper('a4', 'landscape');
        return $pdf->download($filename . '.pdf');
    }
}
