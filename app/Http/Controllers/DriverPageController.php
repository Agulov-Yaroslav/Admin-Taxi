<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverPageController extends Controller
{
    //Вывод страницы со всеми водителями
    public function allDrivers(){

        $drivers = Driver::get();
        return view('Driver.all-drivers', [
            "drivers"=>$drivers
        ]);
    }
    //Страница редактирование водителя
    public function updateDriver($id){
        $driver = Driver::find($id);
        return view('Driver.driver-update', [
            "driver"=>$driver
        ]);
    }
    //Страница с одним водителем и его автомобилями
    public function oneDriver($id){
        $driver = Driver::find($id);
        return view('Driver.driver', [
            "driver"=>$driver
        ]);
    }
}
