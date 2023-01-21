<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AlumnisController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\PendingOfferController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RegisterSessionController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TutorialsController;
use App\Http\Controllers\UpdateUserInfosController;
use App\Http\Controllers\UpdateUserPasswordController;
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
Route::get('/', function () {
    $locale = substr(Request::server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
    return redirect('/' . $locale);
});

Route::get('/{locale?}', [HomeController::class, 'index'])->middleware('setLocale');

Route::get('/admin', \App\Http\Controllers\AdminController::class)->name('admin')->middleware('auth');

Route::get('/{locale?}/terms', function () {
    return view('terms');
})->middleware('setLocale');

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

Route::get('/{locale?}/projects/ajax', [ProjectsController::class, 'ajax'])->middleware('setLocale');


//ROUTE : News
Route::get('/{locale?}/news', [NewsController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/news/{article:slug}', [NewsController::class, 'show'])->middleware('setLocale');

//ROUTE : Forum + Faq
Route::get('/{locale?}/forum', [ForumController::class, 'index'])->middleware('setLocale');

Route::get('/{locale?}/forum/create', [ForumController::class, 'create'])->middleware(['auth', 'setLocale']);
Route::post('/{locale?}/forum/create', [ForumController::class, 'store'])->middleware(['auth', 'setLocale']);

Route::get('/{locale?}/forum/questions/{question:slug}/edit', [ForumController::class, 'edit'])->middleware(['auth', 'setLocale']);
Route::post('/{locale?}/forum/questions/{question:slug}/edit', [ForumController::class, 'update'])->middleware(['auth', 'setLocale']);

Route::post('/{locale?}/forum/questions/{question:slug}/delete', [ForumController::class, 'destroy'])->middleware(['auth', 'setLocale']);

Route::post('/{locale?}/forum/questions/{question:slug}/reply/{reply:id}/edit', [ReplyController::class, 'update'])->middleware(['auth', 'setLocale']);
Route::post('/{locale?}/forum/questions/{question:slug}/reply/{reply:id}/delete', [ReplyController::class, 'destroy'])->middleware(['auth', 'setLocale']);

Route::get('/{locale?}/forum/questions/{question:slug}', [ForumController::class, 'show'])->middleware('setLocale');
Route::get('/{locale?}/faq', [FaqController::class, 'index'])->middleware('setLocale');

Route::post('/{locale?}/forum/questions/{question:slug}/reply', [ReplyController::class, 'store'])->middleware(['auth', 'setLocale']);

//ROUTE : Jobs
Route::get('/{locale?}/jobs/offers', [OffersController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/jobs/offers/{company:slug}/{offer:slug}', [OffersController::class, 'show'])->middleware('setLocale');
Route::get('/{locale?}/jobs/offers/create', [PendingOfferController::class, 'create'])->middleware('setLocale');
Route::post('/{locale?}/jobs/offers/create', [PendingOfferController::class, 'store'])->middleware('setLocale');
Route::get('/{locale?}/jobs/partners', [PartnersController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/jobs/partners/{company:slug}', [PartnersController::class, 'show'])->middleware('setLocale');

//ROUTE : Tutorials + Resources
Route::get('/{locale?}/tutorials', [TutorialsController::class, 'index'])->middleware('setLocale');
Route::get('/{locale?}/resources', [ResourcesController::class, 'index'])->middleware('setLocale');

//ROUTE : Profile
Route::get('/{locale?}/users/{user:slug}', [UserController::class, 'show'])->middleware('setLocale');
Route::get('/{locale?}/users/{user:slug}/edit', [UserController::class, 'edit'])->middleware(['auth', 'setLocale']);

Route::post('/{locale?}/users/{user:slug}/update-infos', UpdateUserInfosController::class)->middleware(['auth', 'setLocale']);
Route::post('/{locale?}/users/{user:slug}/update-password', UpdateUserPasswordController::class)->middleware(['auth', 'setLocale']);

//ROUTE : Auth
Route::get('/{locale?}/login', [AuthenticatedSessionController::class, 'create'])->name('login')->middleware(['guest', 'setLocale']);
Route::post('/{locale?}/login', [AuthenticatedSessionController::class, 'store'])->middleware(['guest', 'setLocale']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth');

Route::get('/{locale?}/register', [RegisterSessionController::class, 'create'])->name('register')->middleware(['guest', 'setLocale']);
Route::post('/{locale?}/register', [RegisterSessionController::class, 'store'])->middleware(['guest', 'setLocale']);

Route::get('/{locale?}/forgot-password', [ResetPasswordController::class, 'create'])->middleware(['guest', 'setLocale'])->name('password.email');
Route::post('/{locale?}/forgot-password', [ResetPasswordController::class, 'store'])->middleware(['guest', 'setLocale']);

Route::get('/{locale?}/reset-password/{token}', [ResetPasswordController::class, 'edit'])->middleware(['guest', 'setLocale'])->name('password.reset');
Route::post('/{locale?}/reset-password', [ResetPasswordController::class, 'update'])->middleware(['guest', 'setLocale']);
