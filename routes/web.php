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

Route::get('/', 'PostController@getAll')->name('home');
Route::get('/about', function() {
    return view('about');
});
Route::get('/contact', function() {
    return view('contact');
});
Route::get('/panel', 'PanelController@index')->name('panel.index');
Route::get('/login', 'PanelController@login')->name('panel.login');
Route::post('/login', 'PanelController@loginRequest')->name('panel.loginRequest');
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/{slug}', 'PostController@get')->name('post.get');
