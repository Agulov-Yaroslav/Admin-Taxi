<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverPageController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarPagesController;


Route::get('/', [DriverPageController::class, 'allDrivers'])->name('allDrivers'); //Все водители
Route::get('/driver/{id}', [DriverPageController::class, 'oneDriver']); //Один водитель
Route::get('/driver/{id}/update', [DriverPageController::class, 'updateDriver']); //Страница редактирования водителей

Route::post('/', [DriverController::class, 'addNewDriver']); //Добавление нового водителя
Route::post('/driver/delete', [DriverController::class, 'deleteDriver']); //Удаление водителя
Route::post('/driver/update', [DriverController::class, 'updateDriver']); //Редактирование водителя

Route::get('/car', [CarPagesController::class, 'allCars'])->name('allCars'); //Все машины

Route::post('/car', [CarController::class, 'addNewCar']); //Добавление новой машины
Route::post('/car/delete', [CarController::class, 'deleteCar']); //Удаление машины

