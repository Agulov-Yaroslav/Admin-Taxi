<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverPageController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarPagesController;


Route::get('/', [DriverPageController::class, 'allDrivers'])->name('allDrivers'); //Все водители
Route::get('/driver/{id}', [DriverPageController::class, 'oneDriver']); //Один водитель
Route::get('/driver/{id}/update', [DriverPageController::class, 'updateDriver']); //Страница редактирования водителей

Route::post('/', [DriverController::class, 'addNewDriver']);
Route::post('/driver/delete', [DriverController::class, 'deleteDriver']);
Route::post('/driver/update', [DriverController::class, 'updateDriver']);

Route::get('/car', [CarPagesController::class, 'allCars'])->name('allCars'); //Все машины

