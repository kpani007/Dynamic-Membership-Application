<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;
{
    class SectionService
    {
        public static function getSections()
        {
            // $sections = DB::table('sections')->where('status', 'Active')->get();
            $sections = Section::orderby('order', 'asc')->where('status', 'Active')->get();

            return  $sections;
            //return Section::orderby('order', 'asc')->where('status', 'Active')->get();
        }
    }
}