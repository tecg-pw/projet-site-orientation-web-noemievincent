<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlumnisController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TutorialsController;
use App\Http\Controllers\UserController;
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

Route::get('/{locale?}', [HomeController::class, 'index'])->middleware('setLocale');

Route::get('/{locale?}/terms', function () {
    return view('terms');
});
Route::get('/{locale?}/search', [SearchController::class, 'index'])->middleware('setLocale');

//ROUTE : About
Route::get('/{locale?}/about', [AboutController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/classes/{course:slug}', [CourseController::class, 'show'])->middleware('setLocale');
Route::get('/{locale?}/teachers/{teacher:slug}', [TeacherController::class, 'show'])->middleware('setLocale');

//ROUTE : Alumnis
Route::get('/{locale?}/alumnis', [AlumnisController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/alumnis/{alumni:slug}', [AlumnisController::class, 'show'])->middleware('setLocale');

//ROUTE : Projects
Route::get('/{locale?}/projects', [ProjectsController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/projects/{student:slug}/{project:slug}', [ProjectsController::class, 'show'])->middleware('setLocale');

//ROUTE : News
Route::get('/{locale?}/news', [NewsController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/news/{article:slug}', [NewsController::class, 'show'])->middleware('setLocale');

//ROUTE : Forum + Faq
Route::get('/{locale?}/forum', [ForumController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/forum/{question:slug}', [ForumController::class, 'show'])->middleware('setLocale');
Route::get('/{locale?}/faq', [FaqController::class, 'index'])->middleware('setLocale');

//ROUTE : Jobs
Route::get('/{locale?}/jobs/offers', [OffersController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/jobs/offers/{company:slug}/{offer:slug}', [OffersController::class, 'show'])->middleware('setLocale');
Route::get('/{locale?}/jobs/create', [OffersController::class, 'create'])->middleware('setLocale');
Route::get('/{locale?}/jobs/partners', [PartnersController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/jobs/partners/{company:slug}', [PartnersController::class, 'show'])->middleware('setLocale');

//ROUTE : Tutorials + Resources
Route::get('/{locale?}/tutorials', [TutorialsController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/resources', [ResourcesController::class, 'index'])->middleware('setLocale');

//ROUTE : Profile
Route::get('/{locale?}/users/{user:slug}', [UserController::class, 'show'])->middleware('setLocale');
Route::get('/{locale?}/users/{user:slug}/edit', [UserController::class, 'edit'])->middleware(['auth', 'setLocale']);

//ROUTE : Auth
Route::get('/{locale?}/login', function () {
    return view('auth.login');
})->name('login')->middleware(['guest', 'setLocale']);
Route::get('/{locale?}/register', function () {
    return view('auth.register');
})->middleware(['guest', 'setLocale']);
Route::get('/{locale?}/reset-password', function () {
    return view('auth.reset-password');
})->middleware(['guest', 'setLocale']);
