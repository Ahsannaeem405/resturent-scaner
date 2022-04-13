<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderPickup;
use Carbon\Carbon;
class WaitingOrderController extends Controller
{
    public function listing(){
    //   return  orderpickup::get();
        $waitingOrders=OrderPickup::where("order_pickups.status","=","0")
        ->join("vehicle_colors", "vehicle_colors.id","=","order_pickups.vehicle_color")
        ->join("vehicle_types", "vehicle_types.id","=","order_pickups.vehicle_type")
        ->select("order_pickups.*", "vehicle_types.type", "vehicle_colors.color")
        ->get();
        // dd($waitingOrders);
        $allOrders = OrderPickup::all()->count();
        // dd($waitingOrders);
        $return = [
            "orders" => $waitingOrders,
            "all" => $allOrders
        ];
        return view("dashboard/waiting", $return);
    }

    public function statusUpdate(Request $request){
        if($request->status==0){
            $update = 1;
        }else{
            $update = 0;
        }
        OrderPickup::where("id", $request->id)
        ->update([
            "status" => $update,
            "fullfill"=>Carbon::now(),
        ]);
        return redirect()->back();
    }

    public function statusUpdateComplete(Request $request){
        if($request->status==0){
            $update = 1;
        }else{
            $update = 0;
        }
        OrderPickup::where("id", $request->id)
        ->update([
            "status" => $update,
        ]);
        return redirect()->back();
    }

    public function statusComplete (){
       
        $waitingOrders=OrderPickup::where("order_pickups.status","=","1")
        ->join("vehicle_colors", "vehicle_colors.id","=","order_pickups.vehicle_color")
        ->join("vehicle_types", "vehicle_types.id","=","order_pickups.vehicle_type")
        ->select("order_pickups.*", "vehicle_types.type", "vehicle_colors.color")
        ->get();
        $allOrders = OrderPickup::all()->count();
        
        $return = [
            "all" => $allOrders,
            "orders" => $waitingOrders
        ];
        return view("dashboard/complete", $return);
    }
}
