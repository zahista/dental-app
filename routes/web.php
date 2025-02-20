<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;


Route::get('/register', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);

Route::get('/appointment/{appointment}', [AppointmentController::class, 'index']);


Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'authenticate']);


Route::get('/dashboard', [DashboardController::class, 'index']);