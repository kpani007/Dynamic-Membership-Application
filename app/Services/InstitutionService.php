<?php

namespace App\Services;

use App\Models\Institution;
use Illuminate\Support\Facades\Auth;
{
    class InstitutionService
    {
        public static function getCurrentInstitution()
        {
           return $institution = Institution::where('user_id', Auth::user()->id)->first();
        }
    }
}