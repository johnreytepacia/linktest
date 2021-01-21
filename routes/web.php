<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function(){
    Route::get('/', 'ProductoController@index')->name('Product Page');
});