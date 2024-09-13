<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessImmigrationController extends Controller
{
    //business_immigration
    public function businessImmigration(){
        return view('guest.business_immigration');
    }
}
