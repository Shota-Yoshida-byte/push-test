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
Route::group(['prefix' => 'admin'],function(){
    Route::get('news/create','Admin\NewsController@add');
});

Route::get('/sample','SampleController@index');

Route::get('/users/create', 'UserController@create');

public function add()
  {
      return view('admin.news.create');
  }