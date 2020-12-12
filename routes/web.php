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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin/news'], function() {
    Route::get('create', 'Admin\NewsController@add');
});

//PHP/Laravel09_課題3
Route::get('XXX', 'AAAController@bbb');

//PHP/Laravel09_課題4
Route::get('admin/profile/create', 'Admin\ProfileController@add');
Route::get('admin/profile/edit', 'Admin\ProfileController@edit');