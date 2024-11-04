<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PageController; 
use App\Http\Controllers\Auth\LoginController; // Utilizo los controladores de Auth
use App\Http\Controllers\Auth\RegisterController; // Utilizo el controldor de Auth   
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;

// Rutas CRUD- Administrador-----------
Route::resource('hotel', HotelController::class);
Route::resource('room', RoomController::class); 

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservation.index');
Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservation.store'); 

Route::get('/reservations/{id}/details', [ReservationController::class, 'details'])->name('reservation.details');
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
Route::post('/reservations/{id}/confirm', [ReservationController::class, 'confirm'])->name('reservation.confirm');

// Hoteles disponibles 
Route::get('/api/rooms', [RoomController::class, 'apiRooms']);

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'welcome')->name('welcome');
    Route::get('/about', 'about')->name('about');
    Route::get('/contacto', 'contact')->name('contact');
    Route::get('/service', 'service')->name('service');
    
}); 
// Login 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']); 
// Registro
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.submit'); 

// Cerrar Session 
Route::post('logout', [LoginController::class, 'logout'])->name('logout');