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



Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin', 'Admin\DashboardController@index')->name('admin');
Route::get('/admin/posts', 'Admin\PostsController@index')->name('news');
Route::any('/admin/posts/create', 'Admin\PostsController@create')->name('create');
Route::any('/admin/posts/edit/{id}', 'Admin\PostsController@edit')->name('edit');
Route::any('/admin/posts/del/{id}', 'Admin\PostsController@destroy')->name('del');
Route::get('/', 'Admin\PostsController@five')->name('welcome');