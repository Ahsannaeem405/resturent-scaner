<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleColor;
use App\Models\VehicleType;

class FormFieldController extends Controller
{
    public function updateColor (Request $request){
        // return $request;
        VehicleColor::where("id",$request->id)->update([
            "color" => $request->color,
        ]);
        return back();
    }

    public function updateType (Request $request){
        // return $request;
        // return $request->
        VehicleType::where("id",$request->id)->update([
            "type" => $request->type,
        ]);
        return back();
    }
     
}
