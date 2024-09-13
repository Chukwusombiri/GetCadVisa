<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $users;    

    public function __construct()
    {
        $this->users = User::whereNotIn('is_admin', [1])
        ->orderBy('id','desc')->get();       
    }


    public function index()
    {                    
        return view('admin.users');
    }

    public function show($id)
    {              
        $user = User::find($id);  
        return view('admin.showuser')->with([
            'user'=>$user,
        ]);
    }
}
