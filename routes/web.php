<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/terms', function () {
    return view('terms');
});

// Projects
Route::get('/projects', function () {
    return view('projects.index');
});
Route::get('/projects/name/slug', function () {
    return view('projects.show');
});

// News
Route::get('/news', function () {
    return view('news.index');
});
Route::get('/news/slug', function () {
    return view('news.show');
});

// Forum
Route::get('/forum', function () {
    return view('forum.index');
});
Route::get('/forum/slug', function () {
    return view('forum.show');
});

Route::get('/faq', function () {
    return view('faq.index');
});

Route::get('/username', function () {
    return view('profile.index');
});
Route::get('/username/edit', function () {
    return view('profile.edit');
});

//Auth
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');
Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest');
Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->middleware('guest');
