<?php

namespace App\Http\Livewire;

use App\Helpers\ImageHelper;
use App\Services\NewsService;
use Illuminate\Support\Str;
use Livewire\Component;

class News extends Component
{ 
    public $blogs = [];
    protected $news;
    public $uniqueKey;

    public function mount(NewsService $news){
        $this->news = $news;
        $this->blogs = $this->news->getlatestNews(10);
        if(count($this->blogs)>0){
            foreach ($this->blogs as &$article) {
                if ($article['urlToImage']==null || !ImageHelper::isValidImage($article['urlToImage'])) {
                    $article['urlToImage'] = asset('images/blog-image.avif');
                }
            }
            unset($article);
        }
        $this->uniqueKey = Str::random(10);
    }

    public function refreshComponent()
    {
        $this->uniqueKey = Str::random(10);
    }
    
    public function render()
    {       
        return view('livewire.news',[
            'blogs'=>$this->blogs,
        ]);       
    }        
}
