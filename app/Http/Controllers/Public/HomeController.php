<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        $latest_news = News::latest()->first();

        return view('Public.Home', compact('latest_news'));
    }

    public function News()
    {
        $latest_news = News::latest()->first();
        $news = News::paginate(20);

        return view('Public.News', compact('news', 'latest_news'));
    }
}
