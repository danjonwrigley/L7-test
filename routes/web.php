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

Route::get('admin/users', 'UsersController@showAll')->name('users');
Route::get('admin/users/{id}', 'UsersController@show')->name('user');
Route::get('admin/users/{id}/edit', 'UsersController@edit')->name('user-edit');

Route::get('admin/posts', 'PostsController@showAll')->name('posts');
Route::get('admin/posts/{slug}', 'PostsController@show')->name('post');
Route::get('admin/posts/{slug}/edit', 'PostsController@edit')->name('post-edit');

// Payments
Route::get('payments/create', 'PaymentsController@create')->name('payment-create');
Route::get('payments', 'PaymentsController@store')->name('payments');

// Admin section
Auth::routes();

Route::get('admin/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('admin/logout', 'Auth\LogoutController')->name('logout');
