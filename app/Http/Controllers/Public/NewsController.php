<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $latest_news = News::latest()->first();
        $news = News::paginate(20);

        return view('Public.News.Index', compact('news', 'latest_news'));
    }
    public function show($slug)
    {
        $news = News::where('slug', '=', $slug)->first();
        return view('Public.News.Show', compact('news'));
    }
}
