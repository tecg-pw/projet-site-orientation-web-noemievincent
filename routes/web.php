<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlumnisController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TutorialsController;
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

Route::get('/', [HomeController::class, 'index']);

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
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/projects/{student:slug}/{project:slug}', [ProjectsController::class, 'show']);

//ROUTE : News
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{article:slug}', [NewsController::class, 'show']);

//ROUTE : Forum + Faq
Route::get('/forum', function () {
    return view('forum.index');
});
Route::get('/forum/slug', function () {
    return view('forum.show');
});
Route::get('/faq', [FaqController::class, 'index']);

//ROUTE : Jobs
Route::get('/jobs/offers', [OffersController::class, 'index']);
Route::get('/jobs/offers/{company:slug}/{offer:slug}', [OffersController::class, 'show']);
Route::get('/jobs/create', [OffersController::class, 'create']);
Route::get('/jobs/partners', [PartnersController::class, 'index']);
Route::get('/jobs/partners/{company:slug}', [PartnersController::class, 'show']);

//ROUTE : Tutorials + Resources
Route::get('/tutorials', [TutorialsController::class, 'index']);
Route::get('/resources', [ResourcesController::class, 'index']);

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
