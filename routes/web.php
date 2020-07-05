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
Route::get('/panel/post/edit/{id}', 'PanelController@editPost')->name('panel.post.edit');
Route::get('/panel/post/delete/{id}', 'PanelController@deletePost')->name('panel.post.delete');
Route::post('/panel/post/new', 'PanelController@savePost');
Route::post('/panel/post/edit', 'PanelController@updatePost');

Route::get('/panel/pages', 'PanelController@pages')->name('panel.pages');
Route::get('/panel/page/new', 'PanelController@newPage')->name('panel.page.new');
Route::get('/panel/page/edit/{id}', 'PanelController@editPage')->name('panel.page.edit');
Route::get('/panel/page/delete/{id}', 'PanelController@deletePage')->name('panel.page.delete');
Route::post('/panel/page/new', 'PanelController@savePage');
Route::post('/panel/page/edit', 'PanelController@updatePage');

Route::get('/panel/menus', 'PanelController@menus')->name('panel.menus');
Route::get('/panel/menu/new', 'PanelController@newMenu')->name('panel.menu.new');
Route::get('/panel/menu/edit/{id}', 'PanelController@editMenu')->name('panel.menu.edit');
Route::get('/panel/menu/delete/{id}', 'PanelController@deleteMenu')->name('panel.menu.delete');
Route::post('/panel/menu/new', 'PanelController@saveMenu');
Route::post('/panel/menu/edit', 'PanelController@updateMenu');

Route::get('/login', 'PanelController@login')->name('panel.login');
Route::post('/login', 'PanelController@loginRequest')->name('panel.loginRequest');

Route::get('/logout', 'PanelController@logout')->name('panel.logout');

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/{slug}', 'PostController@get')->name('post.get');
