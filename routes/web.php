<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'HomePage']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'John Doe', 'title' => 'About Us']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
