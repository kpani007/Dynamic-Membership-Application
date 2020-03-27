<?php

namespace App\Services;

use App\Models\Response;
use App\Models\Institution;
use Illuminate\Support\Facades\Auth;
{
    class ResponseService
    {
        public static function getResponses()
        {
           $institution_id = Institution::where('user_id', Auth::user()->id)->first()['id'];
            return Response::where('institution_id', $institution_id)->get();
        }
    }
}