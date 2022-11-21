<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlumnisController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
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
Route::get('/search', function () {
    return view('search');
});

//ROUTE : About
Route::get('/about', [AboutController::class, 'index']);
Route::get('/classes/{course:slug}', [CourseController::class, 'show']);
Route::get('/teachers/{teacher:slug}', [TeacherController::class, 'show']);

//ROUTE : Alumnis
Route::get('/alumnis', [AlumnisController::class, 'index']);
Route::get('/alumnis/{alumni:slug}', [AlumnisController::class, 'show']);

//ROUTE : Projects
Route::get('/projects', function () {
    return view('projects.index');
});
Route::get('/projects/name/slug', function () {
    return view('projects.show');
});

//ROUTE : News
Route::get('/news', function () {
    return view('news.index');
});
Route::get('/news/slug', function () {
    return view('news.show');
});

//ROUTE : Forum + FAQ
Route::get('/forum', function () {
    return view('forum.index');
});
Route::get('/forum/slug', function () {
    return view('forum.show');
});
Route::get('/faq', function () {
    return view('faq.index');
});

//ROUTE : Jobs
Route::get('/jobs/offers', function () {
    return view('jobs.index');
});
Route::get('/jobs/offers/slug', function () {
    return view('jobs.show');
});
Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::get('/jobs/partners', function () {
    return view('partners.index');
});
Route::get('/jobs/partners/slug', function () {
    return view('partners.show');
});

//ROUTE : Tutorials + Resources
Route::get('/tutorials', function () {
    return view('tutorials.index');
});
Route::get('/resources', function () {
    return view('resources.index');
});

//ROUTE : Profile
Route::get('/username', function () {
    return view('profile.index');
});
Route::get('/username/edit', function () {
    return view('profile.edit');
});

//ROUTE : Auth
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');
Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest');
Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->middleware('guest');
