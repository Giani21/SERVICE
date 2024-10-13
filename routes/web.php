<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientProfileController;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/clienthome', function () {
    return view('clienthome');
})->name('clienthome');

Route::get('/clientprofile', function () {
    return view('clientprofile');
})->name('clientprofile');

Route::get('/clientsearch', function () {
    return view('clientsearch');
})->name('clientsearch');

Route::get('/clientchat', function () {
    return view('clientchat');
})->name('clientchat');

Route::get('/clientviewcompanies', function () {
    return view('clientviewcompanies');
})->name('clientviewcompanies');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/employeehome', function () {
    return view('employeehome');
})->name('employeehome');

Route::get('/companyhome', function () {
    return view('companyhome');
})->name('companyhome');

// Ruta para mostrar el formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Ruta para manejar el registro
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/clientprofile', [ClientProfileController::class, 'show'])->name('clientprofile.show')->middleware('auth');

// Actualizar el perfil del cliente
Route::put('/clientprofile', [ClientProfileController::class, 'update'])->name('clientprofile.update')->middleware('auth');