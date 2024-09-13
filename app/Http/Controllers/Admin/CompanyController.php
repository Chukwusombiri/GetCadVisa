<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $company = Company::first();
        return view('admin.company_details')->with(['company'=>$company,       
        ]);
    }

    public function edit($id){            
        $company = Company::find($id);
        return view('admin.editcompany_details')->with(['company'=>$company, 
        ]);
    }

    public function update(Request $request,$id)
    {
        $company = Company::find($id);
        $this->validate($request,[
            'name'=>['required','string'],
            'email'=>['required','email'],
            'phone'=>['required','string',],
            'location'=>['required','string'],                       
            'vision'=>['required','string',],           
        ]);

        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone = $request->phone;
        $company->location = $request->location;  
        $company->vision = $request->vision; 
        $company->update();
        return redirect()->back()->with('success','Company Details updated successfully.');
    }
}
