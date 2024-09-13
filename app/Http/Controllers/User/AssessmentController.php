<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    /* assessment */
    public function assessment(){
        return view('guest.assessment');
    }
    /* study */
    public function study(){
        return view('guest.study_assessment');
    }
    /* business */
    public function business(){
        return view('guest.business_assessment');
    }
    /* sponsorship */
    public function sponsorship(){
        return view('guest.sponsorship_assessment');
    }
    /* complete */
    public function complete(){
        //if(! session()->has('assessmentSubmitted')) return redirect()->route('assessment');
        return view('guest.completedAssessment');
    }
}
