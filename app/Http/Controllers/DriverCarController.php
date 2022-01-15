<?php

namespace App\Http\Controllers;

use App\Models\CarDriver;

use Illuminate\Http\Request;

class DriverCarController extends Controller
{
    //Добавление связей
    public function addConnect(Request $request){
        $data = $request->only( 'driver_id', 'car_id');
        $form = CarDriver::create([
            "driver_id" => $data["driver_id"],
            "car_id" => $data["car_id"],
        ]);
        if($form){
            return redirect('/');
        }
    }
    //Удаление связей
    public function delConnect(Request $request){
        $connect = CarDriver::where("driver_id", $request->driver_id)
                            ->where("car_id", $request->car_id)
                            ->get();
        if(!$connect){
            abort(404);
        }
        $connect->each->delete();
        return redirect()->back();
    }
}
