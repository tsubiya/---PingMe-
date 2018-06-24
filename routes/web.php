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


Route::get('/',[
        'FrontendController@index',
        'as'=>'index'
      ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/msg',[
        'uses'=>'UsersController@index',
        'as'=>'users'
      ]);
Route::get('/msg',[
        'uses'=>'MsgsController@index',
        'as'=>'msg'
      ]);
Route::post('/msg',[
        'uses'=>'MsgController@sendMessage',
        'as'=>'msg.send'
      ]);
Route::get('/msg',[
        'uses'=>'MsgController@composeMessage',
        'as'=>'msg.recv'
      ]);
Route::get('/user{id}',[
        'uses'=>'MsgController@conversation',
        'as'=>'conversation'
      ]);
Route::get('/sent',[
        'FrontendController@sent',
        'as'=>'sent'
      ]);

Route::get('/recv',[
        'FrontendController@recv',
        'as'=>'recv'
      ]);
Route::get('/singlemsg',[
        'FrontendController@single',
        'as'=>'siglemsg'
      ]);
