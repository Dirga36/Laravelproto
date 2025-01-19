<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About Page'], ['char' => 'Pages']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

//PR
Route::get('/posts', function () {
    return view('posts', ['title' => 'Article Page', 'posts' => Post::all()]);
});
Route::get('/posts/{post:slug}', function (Post $post) { // Fixed the route parameter syntax
    return view('post', ['title' => 'Full Article', 'post' => $post]);
});
