<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function(){
    Route::get('/', 'ProductoController@index')->name('Product Page');
    Route::get('/fb', 'Productocontroller@fb')->name('FB');
    Route::get('/twitter', 'Productocontroller@twitter')->name('TW');
    Route::get('/pin', 'Productocontroller@pin')->name('Pin');
});