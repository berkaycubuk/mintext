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
Route::get('/panel/posts', 'PanelController@posts')->name('panel.posts');
Route::get('/panel/post/new', 'PanelController@newPost')->name('panel.post.new');
Route::get('/panel/pages', 'PanelController@pages')->name('panel.pages');
Route::get('/pane/pages/new', 'PanelController@newPage')->name('panel.page.new');
Route::get('/login', 'PanelController@login')->name('panel.login');
Route::post('/login', 'PanelController@loginRequest')->name('panel.loginRequest');
Route::get('/logout', 'PanelController@logout')->name('panel.logout');
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/{slug}', 'PostController@get')->name('post.get');
