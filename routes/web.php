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

Route::get('/', 'FeedBackController@index');
Route::get('feedback/success', 'FeedBackController@success');

Route::post('feedback/create', 'FeedBackController@create');

Route::get('/admin/feedback', 'FeedBackController@admin');
