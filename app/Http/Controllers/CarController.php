<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    //Добавление новой машины
    public function addNewCar(Request $request){
        $data = $request->only('number', 'brand', 'color');
        $form = Car::create([
            "number" => $data["number"],
            "brand" => $data["brand"],
            "color" => $data["color"],
        ]);
        if($form){
            return redirect()->back();
        }
    }
    //Удаление машины
    public function deleteCar(Request $request){
        $car = Car::find($request->id);
        if(!$car){
            abort(404);
        }
        $car->delete();
        return redirect()->back();
    }
}
