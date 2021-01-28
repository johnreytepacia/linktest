<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function(){
    Route::get('/', 'ProductoController@index')->name('Product Page');
    
    Route::get('/fb', 'ProductoController@fb')->name('FB');
    Route::get('/twitter', 'ProductoController@twitter')->name('TW');
    Route::get('/pin', 'ProductoController@pin')->name('Pin');
});