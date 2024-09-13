<?php



namespace App\Http\Controllers\Guest;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;

use App\Models\Blog;
use App\Services\NewsService;
use Illuminate\Http\Request;



class InadmissibilityController extends Controller

{
    protected $news;

    public function __construct(NewsService $news)
    {
        $this->news = $news;
    }

    public function inAdmissibilty(){   
        $blogs = $this->news->getlatestNews();
        if(count($blogs)>0){
            foreach ($blogs as &$article) {
                if (!ImageHelper::isValidImage($article['urlToImage'])) {
                    $article['urlToImage'] = asset('images/blog-image.avif');
                }
            }
            unset($article);
        }             
        return view('guest.inadmissiblity')->with('blogs',$blogs);

    }

}

