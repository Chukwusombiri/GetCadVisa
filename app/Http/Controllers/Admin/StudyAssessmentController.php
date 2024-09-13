<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Study;
use Illuminate\Http\Request;

class StudyAssessmentController extends Controller
{
    public function index(){        
        return view('admin.study_assessment');
    }

    public function show($id){
        $study_assessment = Study::find($id);
        return view('admin.show_study_assessment')->with('study_assessment',$study_assessment);
    }
}
