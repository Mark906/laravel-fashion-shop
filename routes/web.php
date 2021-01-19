<?php

use Illuminate\Support\Facades\Route;


Route::get('/', "HomeController@index")->name('homepage');
Route::get('/prodotti', "HomeController@_prodotti")->name('pagina_prodotti');
