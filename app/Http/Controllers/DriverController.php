<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    public function allDrivers(){

        $drivers = Driver::get();
        return view('all-drivers', [
            'drivers'=>$drivers
        ]);
    }
    public function addNewDriver(Request $request){
        $validator = Validator::make($request->only('name', 'phone', 'score'), [
            'name' => ['required', 'string', 'min:5', 'max:100'],
            'phone' => ['required', 'string','min:17', 'max:17'],
            'score' => ['required', 'int'],
        ])->validate();
        $data = $request->only('name', 'phone', 'score');
        $form = Driver::create([
            "name" => $data["name"],
            "phone" => $data["phone"],
            "score" => $data["score"],
        ]);

        if($form){
            return redirect()->back();
        }

    }
}
