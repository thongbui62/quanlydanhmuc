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

//quản lý thao tác database

Route::group(['prefix' => 'ht97_admin'], function() {

	//quan ly lam viec voi form
    Route::group(['prefix' => 'form'], function() {
    	Route::get('listForm','formController@listForm')->name('listForm');
        Route::get('addForm','formController@getAddForm')->name('getAddForm');
        Route::post('addForm','formController@postAddForm')->name('postAddForm');
        Route::get('editForm/{id?}','formController@getEditForm')->name('getEditForm');
        Route::post('editForm/{id?}','formController@postEditForm')->name('postEditForm');
        Route::get('deleteForm/{id?}','formController@deleteForm')->name('deleteForm');
    });
});
