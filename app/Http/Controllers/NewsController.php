<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function getTopHeadlines()
    {
        $apiKey = '6d305a66b929428ba21e2ce9d99e25ec';
        $apiUrl = 'https://newsapi.org/v2/top-headlines';
        
        $response = Http::get($apiUrl, [
            'country' => 'US',
            'apiKey' => $apiKey,
        ]);

        $news = $response->json()['articles'];
        
        return view('pages.news', ['news' => $news]);
    }
}
