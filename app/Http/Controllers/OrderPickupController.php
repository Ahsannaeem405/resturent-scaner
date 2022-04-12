<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderPickup;
use App\Models\FormField;
use App\Models\LocationInfo;
use App\Models\VehicleType;
use App\Models\VehicleColor;
use Illuminate\Support\Facades\Session;
use Carbon;

class OrderPickupController extends Controller
{
    public function homePage(){
        $vehicleType = VehicleType::where("status","1")->get();
        $vehicleColor = VehicleColor::where("status","1")->get();
        $name = FormField::find(1);
        $phone_no = FormField::find(2);
        $order_no = FormField::find(3);
        $vehicle_color = FormField::find(4);
        $vehicle_type = FormField::find(5);
        $parking = FormField::find(6);
        $detail = FormField::find(7);

        $info = LocationInfo::first();
        $logo = LocationInfo::where("id","1")->get();
        $return = [
            "info" => $info,
            "vType" => $vehicleType,
            "vColor" => $vehicleColor,
        ];
        return view("index", $return ,compact('name','phone_no','order_no','vehicle_color','vehicle_type','parking','detail'));
    }

    public function saveOrderPickUp(Request $request){
        $data= new OrderPickup;
        $data->name= $request->name;
        $data->phone_no= $request->phone_number;
        $data->order_no= $request->order_number;
        $data->order_date = Carbon\Carbon::now()->format("m");
        $data->vehicle_color= $request->vehicle_color;
        $data->vehicle_type= $request->vehicle_type;
        $data->parking= $request->parking;
        $data->status='0';
        $data->order_detail= $request->details;
        if($data->save()){
            Session::flash("success", "Order inserted successfuly");
        }else{
            Session::flash("error", "Order not inserted");
        }
        return redirect("success");
    }

    public function success(){
        return view("order-success");
    }
}
