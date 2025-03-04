<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\TreatmentController;

Route::get('/register', [AuthController::class, 'index'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'authenticate']);


Route::middleware(['auth'])->group(function () {
    Route::get('/', [AppointmentController::class, 'index'])->name('appointment.index');
    Route::get('/appointment/{appointment}', [AppointmentController::class, 'show'])->name('appointment.show');
    Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');
    Route::post('/appointment_edit', [AppointmentController::class, 'edit'])->name('appointment.edit');

    Route::post('/treatment', [TreatmentController::class, 'store'])->name('treatment.store');
});
