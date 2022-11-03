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

Route::get('/projects', function () {
    return view('projects.index');
});
Route::get('/projects/name/slug', function () {
    return view('projects.show');
});

Route::get('/news', function () {
    return view('news.index');
});
Route::get('/news/slug', function () {
    return view('news.show');
});

//Auth
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/reset-password', function () {
    return view('auth.reset-password');
});
