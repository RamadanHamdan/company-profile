<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home',['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about',['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});

Route::get('/blog', function () {
    return view('blog',['title' => 'Blog']);
});

Route::get('/rute', function () {
    return view('rute',['title' => 'Rute']);
});