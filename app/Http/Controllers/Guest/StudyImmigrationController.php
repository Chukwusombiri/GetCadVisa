<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudyImmigrationController extends Controller
{
    //studyImmigration
    public function studyImmigration(){
        return view('guest.studyImmigration');
    }
}
