<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ReservationController;

Route::resource('reservations', ReservationController::class);
Route::get('reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
Route::put('reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
Route::delete('reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');
