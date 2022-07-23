<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ArticleTypeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ReviwerController;
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


// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
// Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/home', [HomeController::class,'index'])->name('home.index');
Route::get('/article/{article_slug}', [HomeController::class,'articleShow'])->name('article.show');
Route::get('/editors', [HomeController::class,'editors'])->name('editors.index');

Route::group(['middleware' => ['auth']], function() {

    // Dashboard
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard.index');
    Route::get('/submission', [HomeController::class, 'submission'])->name('submission');
    // Resourse
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('articletypes', ArticleTypeController::class);
    Route::resource('reviwers', ReviwerController::class);

    // Article
    Route::group(['prefix' => 'articles'], function() {
        Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
        Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
        Route::post('/submissionOne', [ArticleController::class, 'submissionOne'])->name('articles.submissionOne');
        Route::get('/substpetwo', [ArticleController::class, 'substpetwo'])->name('substpetwo');
        Route::post('/submissionTwo', [ArticleController::class, 'submissionTwo'])->name('articles.submissionTwo');
        Route::get('/substpethree', [ArticleController::class, 'substpethree'])->name('substpethree');
        Route::post('/submissionThree', [ArticleController::class, 'submissionThree'])->name('articles.submissionThree');
    });

});



