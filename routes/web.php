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



Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/article/{article_slug}', 'HomeController@articleShow')->name('article.show');
    Route::get('/editors', 'HomeController@editors')->name('editors.index');
});


Route::group(['namespace' => 'App\Http\Controllers\Auth'], function()
{
    // Register
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'RegisterController@register')->name('register');

    // Login
});
