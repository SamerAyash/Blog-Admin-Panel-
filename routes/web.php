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

Route::view('/master','base_layout.master_layout');
Route::group(['prefix'=>'category','middleware'=>'auth'],function (){
    Route::GET('create',['as'=>'category.create','uses'=>'CategoryController@create']);
    Route::POST('store',['as'=>'category.store','uses'=>'CategoryController@store']);
    Route::GET('/',['as'=>'category.index','uses'=>'CategoryController@index']);
    Route::GET('edit/{id}',['as'=>'category.edit','uses'=>'CategoryController@edit']);
    Route::PUT('update/{id}',['as'=>'category.update','uses'=>'CategoryController@update']);
    Route::GET('delete/{id?}',['as'=>'category.destroy','uses'=>'CategoryController@destroy']);
    Route::GET('hasonerelation','CategoryController@hasOne');
});
Route::get('local/{lang?}',['as'=>'local.change','uses'=>'localizationController@change']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
