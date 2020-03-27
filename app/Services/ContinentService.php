<?php

namespace App\Services;

use App\Models\Continent;
use Illuminate\Support\Facades\Auth;
{
    class ContinentService
    {
        public static function getContinents()
        {
           
            return Continent::orderby('name', 'asc')->get();
        }
    }
}