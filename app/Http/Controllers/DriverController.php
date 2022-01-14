<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    //Добавление нового водителя
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
    //удаление водителя
    public function deleteDriver(Request $request){
        $driver = Driver::find($request->id);
        if(!$driver){
            abort(404);
        }
        $driver->delete();
        return redirect()->back();
    }
    //редактирование водителя
    public function updateDriver(Request $request){

        $validator = Validator::make($request->only('name', 'phone', 'score'), [
            'name' => ['required', 'string', 'min:5', 'max:100'],
            'phone' => ['required', 'string','min:17', 'max:17'],
            'score' => ['required', 'int'],
        ])->validate();
        $data = $request->only('id', 'name', 'phone', 'score');

        $newdriver = Driver::find($data['id']);

        if(!$newdriver){
            abort(404);
        }

        $newdriver->name = $data["name"];
        $newdriver->phone = $data["phone"];
        $newdriver->score = $data["score"];
        $newdriver->save();
        return redirect()->to('/');
    }
}
