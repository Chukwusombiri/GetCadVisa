<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Http\Request;

class GeneralAssessmentController extends Controller
{
    public function index(){        
        return view('admin.assessment');
    }

    public function show($id){
        $assessment = General::findOrFail($id);          
        return view('admin.show_assessment')->with('assessment',$assessment);
    }
}
