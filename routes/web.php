<?php

use Illuminate\Support\Facades\Route; 

Route::get('/', function () {
    return view('welcome');
})->name('welcome');  

Route::get('/about', function(){
    return view('about');
} )->name('about'); 

Route::get('/contacto', function(){
    return view('contact');
} )->name('contact');


Route::get('/service', function(){
    return view('service');
} )->name('service');


Route::get('/reserva', function(){
    return view('reserve');
} )->name('reserva'); 


