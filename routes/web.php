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
Route::get('login',[
    'uses'=>'UserController@getLoginForm',
    'as'=>'user_login'
]);
Route::get('register',[
    'uses'=>'UserController@getRegisterForm',
    'as'=>'user_register'
]);
Route::get('home',[
    'uses'=>'UserController@getHome',
    'as'=>'user_home'
    
]);
Route::post('register',[
    'uses'=>'UserController@postRegisterForm',
    'as'=>'user_register'
]);
Route::get('upload_file',[
    'uses'=>'UserController@getFormUpload',
    'as'=>'upload_file'
]);
Route::post('upload_file',[
    'uses'=>'UserController@postUpload',
    'as'=>'upload_file'
]);