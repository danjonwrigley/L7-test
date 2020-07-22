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

// Redirects
Route::permanentRedirect('/home', '/');

// Standard routes
Route::get('/', 'PagesController@home')->name('home');
Route::get('about', 'PagesController@about')->name('about');

Route::get('users', 'UsersController@showAll')->name('users');
Route::get('users/{id}', 'UsersController@show')->name('user');

Route::get('posts', 'PostsController@showAll')->name('posts');
Route::get('posts/{slug}', 'PostsController@show')->name('post');

// Payments
Route::get('payments/create', 'PaymentsController@create')->name('payment-create');
Route::get('payments', 'PaymentsController@store')->name('payments');

// Admin section
Auth::routes();

Route::get('admin', 'PagesController@admin')->name('admin');
Route::get('logout', function ()
{
    Auth::logout();
    return Redirect::to('home');
});
