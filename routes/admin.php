<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function(){
  Route::get('login', 'App\Http\Controllers\Admin\AdminController@login');
  Route::post('store', 'App\Http\Controllers\Admin\AdminController@store');


});
