<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;

class BusinessAssessmentController extends Controller
{
    public function index(){
        return view('admin.business_assessment');
    }

    public function show($id){
        $business_assessment = Business::with(['work'])->where('id',$id)->first();
        return view('admin.show_business_assessment')->with('business_assessment',$business_assessment);
    }
}
