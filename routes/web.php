<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverPageController;


Route::get('/', [DriverPageController::class, 'allDrivers'])->name('allDrivers'); //Все водители
Route::get('/driver/{id}', [DriverPageController::class, 'oneDriver']); //Один водитель
Route::get('/driver/{id}/update', [DriverPageController::class, 'updateDriver']); //Страница редактирования водителей

Route::post('/', [DriverController::class, 'addNewDriver']);
Route::post('/driver/delete', [DriverController::class, 'deleteDriver']);
Route::post('/driver/update', [DriverController::class, 'updateDriver']);

