<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehicleType;
use App\Models\OrderPickup;

class VehicleTypeController extends Controller
{
    public function type(Request $request){
        $data = new VehicleType;
        $data->type=$request->type;
        $data->status='1';
        $data->save();
        return back();
    }

    public function vstatus(Request $request){
        if($request->status==1){
            $request->status=0;
        }else{
            $request->status=1;
        }
        VehicleType::where("id",$request->id)->update([
            "status" => $request->status,
        ]);
        return back();
    }

    public function deletetype(Request $request){
        VehicleType::where("id",$request->id)->delete();

        OrderPickup::where("vehicle_color", $request->id)->delete();

        return back();
    }
}
