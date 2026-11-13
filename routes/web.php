<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Caster\DsCaster;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Blog;

Route::get('/', fn () => view('home', [
    'homes' => Home::orderBy('id')->get(),
    'blogs' => Blog::orderByDesc('published_at')->take(3)->get(),
]));
 
Route::get('/about', fn () => view('about', ['abouts' => About::orderBy('id')->get()]));
 
Route::get('/blog', fn () => view('blog', ['blogs' => Blog::orderByDesc('published_at')->get()]));
Route::get('/contact', function () {   
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name'    => 'required|max:50',
        'email'   => 'required|email',
        'message' => 'required|max:2000',
    ]);

    return back()->with('Success', 'Message Sent.');
});