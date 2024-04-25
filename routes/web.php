<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;

Route::get('/home', function () {
    return view('welcome');
});

Route::view('/','home' ); 

Route::view('/cria-conta','cria-conta' ); 

Route::view('/test','test' ); 

Route::post('/salva-usuario',function (Request $request) {
    dd($request);

})->name('salva-usuario');