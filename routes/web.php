<?php

use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\NewsController;
use App\Models\Joblistings;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', function () {
    return view('Public.About');
})->name('about');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');


Route::get('/career', function () {

    $jobs = Joblistings::all();

    return view('Public.Career', compact('jobs'));
})->name('career');