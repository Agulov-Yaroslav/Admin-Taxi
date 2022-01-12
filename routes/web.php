<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\DriverController::class, 'allDrivers'])->name('allDrivers');
Route::post('/', [\App\Http\Controllers\DriverController::class, 'addNewDriver']);

