<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkController extends Controller
{
     //work permit
     public function workPermit(){
        return view('guest.work_permit');
    }
    
    public function workFaqs(){
        return view('guest.work_faqs');
    }
}
