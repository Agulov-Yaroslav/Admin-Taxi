<?php

namespace App\Http\Controllers;

use App\Models\Driver_Car;
use Illuminate\Http\Request;

class DriverCarController extends Controller
{
    public function addConnect(Request $request){
        $data = $request->only( 'driver_id', 'car_id');
        $form = Driver_Car::create([
            "driver_id" => $data["driver_id"],
            "car_id" => $data["car_id"],
        ]);
        if($form){
            return redirect('/');
        }
    }
}
