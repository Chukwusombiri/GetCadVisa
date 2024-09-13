<?php

namespace App\Http\Controllers\Guest;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Services\NewsService;

class GuestPageController extends Controller
{
    protected $news;

    public function __construct(NewsService $news)
    {
        $this->news = $news;
    }

    public function getBlogs(){
        $blogs = $this->news->getlatestNews();
        if(count($blogs)>0){
            foreach ($blogs as &$article) {
                if ($article['urlToImage']==null || !ImageHelper::isValidImage($article['urlToImage'])) {
                    $article['urlToImage'] = asset('images/blog-image.avif');
                }
            }
            unset($article);
        }

        return $blogs;
    }
    /* home page */
    public function index(){                
        return view('guest.index')->with('blogs',$this->getBlogs());
    }
    /* about */
    public function about(){        
        return view('guest.about');
    }
    /* faq */
    public function faq(){
        return view('guest.faq');
    }   
    /* contact */
    public function contact(){       
        return view('guest.contact');
    }  
    /* news */
    public function news(){       
        return view('guest.news')->with('blogs',$this->getBlogs());
    }
    
     /* legal */
    public function legalAdvice(){         
        return view('guest.legal_advice')->with('blogs',$this->getBlogs());
    }

    /* professional credential */
    public function professionalCredential(){        
        return view('guest.professional_cred')->with('blogs',$this->getBlogs());
    }

    /* temp_res_visa */
    public function tempResVisa(){
        return view('guest.temp_res_visa')->with('blogs',$this->getBlogs());
    }

    /* biometric */
    public function biometrics(){
        return view('guest.biometrics')->with('blogs',$this->getBlogs());
    }

    /* ukrain */
    public function ukrain(){
        return view('guest.ukrain')->with('blogs',$this->getBlogs());
    }
}
