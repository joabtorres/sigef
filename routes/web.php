<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScaleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Rotas de funcionarios
    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees');
    Route::get('/employees/register', [EmployeeController::class, 'showFormEmployees'])->name('employees.register');
    Route::post('/employees/register', [EmployeeController::class, 'register'])->name('employees.register.post');

    // Rotas de escalas;;
    Route::get('/scales', [ScaleController::class, 'index'])->name('scales');
    Route::get('/scales/register', [ScaleController::class, 'register'])->name('scales.register');

    // Rotas de Usuarios;;
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/register', [UserController::class, 'register'])->name('users.register');
    Route::get('/users/edit/{$id}', [UserController::class, 'update'])->name('users.edit');


    // Rotas de Company;;
    Route::get('/Company', [CompanyController::class, 'index'])->name('company');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/forgot', [AuthController::class, 'showForgotForm'])->name('forgot');
Route::post('/forgot', [AuthController::class, 'forgot'])->name('forgot.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
