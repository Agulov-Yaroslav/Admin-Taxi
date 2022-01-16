<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarPagesController extends Controller
{
    //Вывод страницы со всеми машинами
    public function allCars(){

        $cars = Car::get();
        return view('Car.all-cars', [
            "cars"=>$cars
        ]);

    }
}
