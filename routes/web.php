<?php

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

Route::get('/', 'User\UserHomeController@index')                        ->name('users.home');

Route::get('/login', 'Auth\UserLoginController@showLoginForm')          ->name('users.loginForm');
Route::post('/login', 'Auth\UserLoginController@login')                 ->name('users.login');
Route::post('/logout', 'Auth\UserLoginController@logout')               ->name('users.logout');

Route::get('/signup', 'Auth\UserRegisterController@showRegisterForm')   ->name('users.registerForm');
Route::post('/signup', 'Auth\UserRegisterController@register')          ->name('users.register');

Route::resource('/users', 'User\ProfileController', ['only' => ['show', 'edit', 'update']]);

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
