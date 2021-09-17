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

Route::get('/', 'LimingdongController@index');
Route::get('base', 'LimingdongController@base');
Route::get('boke_list', 'LimingdongController@boke_list');
Route::get('note_list', 'LimingdongController@note_list');
Route::get('xinqing_list', 'LimingdongController@xinqing_list');
Route::get('info/{id?}', 'LimingdongController@info');
Route::get('infoed/{id?}', 'LimingdongController@infoed');
Route::get('login', 'LimingdongController@login');
Route::post('dologin', 'LimingdongController@dologin');

Route::group(['middleware' => ['limingdong']], function () {
    Route::get('indexed', 'LimingdongController@indexed');
    Route::get('fabu', 'LimingdongController@fabu');
    Route::post('dofabu', 'LimingdongController@dofabu');
    Route::get('shanchu', 'LimingdongController@shanchu');
    Route::get('doshanchu/{id}', 'LimingdongController@doshanchu');
    Route::get('update', 'LimingdongController@update');
    Route::get('updateinfo/{id}', 'LimingdongController@updateinfo');
    Route::post('doupdate/{id}', 'LimingdongController@doupdate');
    Route::get('xinqing_listed', 'LimingdongController@xinqing_listed');
    Route::get('note_listed', 'LimingdongController@note_listed');
    Route::get('boke_listed', 'LimingdongController@boke_listed');
});
