<?php
namespace App\Services;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class NewsService
{
    protected $apiKey;

    public function __construct(){
        $this->apiKey = config('app.newsApiKey');
    }


    public function getlatestNews($max=null){
        $fromDate = Carbon::now()->subDay()->toIso8601String();  
        $count = 0;
        if($max){
            $count = $max;
        }else{
            $count = 3;
        }     
        try {            
            $response = Http::get('https://newsapi.org/v2/everything?q=(canada AND immigration) OR (canada AND VISA) OR (canada AND "express entry") OR (canada AND "provincial nominee program")&searchIn=title,content&pageSize='.$count.'&sortBy=relevancy&apiKey='.$this->apiKey.'&from='.$fromDate);
            $response = json_decode($response,true);
            if($response['status']==='error'){
                throw new Exception($response['code']);
            }

            if(count($response['articles'])<3){
                $response = Http::get('https://newsapi.org/v2/everything?q=(canada AND immigration) OR (canada AND VISA) OR (canada AND "express entry") OR (canada AND "provincial nominee program")&searchIn=title,content&pageSize='.$count.'&sortBy=relevancy&apiKey='.$this->apiKey);
                $response = json_decode($response,true);
                if($response['status']==='error'){
                    throw new Exception($response['code']);
                }
            }
            return $response['articles'];
            
        } catch (\Exception $e) {
            Log::error('Error fetching news: ' . $e->getMessage());
            return [];
        }
    }
}