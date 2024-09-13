<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //citizenship
    public function citizenship(){
        return view('guest.citizenship');
    }

    public function crsSystem(){
        return view('guest.crs_system');
    }
}
