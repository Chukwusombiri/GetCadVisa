<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Services\NewsService;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    protected $news;

    public function __construct(NewsService $blog)
    {
        $this->news = $blog;
    }
    //crs
    public function crs(){
        return view('guest.crs');
    }

    /* pnp finder */
    public function pnpFinder(){
        $blogs = $this->news->getlatestNews();
        return view('guest.pnp_finder')->with('blogs',$blogs);
    }

    /* clbConverter */
    public function clbConverter(){
        return view('guest.clbConverter');
    }

    //imp
    public function imp(){
        return view('guest.imp');
    }

    //jobFinder
    public function jobFinder(){
        return view('guest.jobFinder');
    }
    //salaryCalculator
    public function salaryCalculator(){
        return view('guest.salaryCalculator');
    }

     //visitingCanada
     public function visitingCanada(){
        return view('guest.visitingCanada');
    }
}
