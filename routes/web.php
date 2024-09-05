<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;



Route::get('/', function() {
    return view('login');
})->name('login');


Route::get('/login', function() {
        return view('login');
    })->name('login');

    Route::post('login', [LoginController::class, 'authenticate'])->name('login.submit');
    
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // Main home route
    Route::get('/', function () {
        return view('home', [
            "title" => "Home"
        ]);
    });

    Route::get('/home', function () {
        return view('home', [
            'title' => "Home"
        ]);
        
    });

    Route::get('/about', function () {
        return view('about', [
            'title' => "about"
        ]);
        
    });

    Route::get('/blog', function () {
        return view('blog', [
            'title' => "post"
        ]);
        
    });

    Route::get('/post', function () {
        return view('post', [
            'title' => "post"
        ]);
        
    });

    Route::get('blog/{slug}', [PostController::class, 'show']);



});