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

Route::get('/', 'IndexController@index');
Route::get('/forum/{id}', 'ForumController@index');
Route::get('/post/create/{forumId}', 'PostController@create');


Auth::routes();

Route::get('/admin', 'Admin\AdminController@index')->name('admin');
Route::get('/admin/forums', 'Admin\ForumsController@index')->name('admin_forums');
Route::get('/admin/forums/create', 'Admin\ForumsController@create')->name('admin_forums_create');
Route::get('/admin/forums/save', 'Admin\ForumsController@save')->name('admin_forums_save');
