<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\VehicleColor;
use  App\Models\OrderPickup;

class VehicleColorController extends Controller
{
    public function color(Request $request){
        $data = new VehicleColor;
        $data->color=$request->color;
        $data->status='1';
        $data->save();
        return back();
    }

    public function cstatus(Request $request){
        if($request->status==1){
            $request->status=0;
        }else{
            $request->status=1;
        }
        VehicleColor::where("id",$request->id)->update([
            "status" => $request->status,
        ]);
        return back();
    }

    public function deletecolor (Request $request){
        VehicleColor::where("id",$request->id)->delete();
        OrderPickup::where("vehicle_type", $request->id)->delete();

        return back();
    }
}
