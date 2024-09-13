<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sponsorship;
use Illuminate\Http\Request;

class SponsorshipAssessmentController extends Controller
{
    public function index(){
        return view('admin.sponsor_assessment');
    }

    public function show($id){
        $sponsor_assessment = Sponsorship::find($id);
        return view('admin.show_sponsor_assessment')->with('sponsor_assessment',$sponsor_assessment);
    }
}
