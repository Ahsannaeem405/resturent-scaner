<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\OrderPickup;
use App\Models\FormField;
use App\Models\VehicleType;
use App\Models\VehicleColor;
use Auth;
use Hash;
use DB;
use Carbon\Carbon;
use App\Models\LocationInfo;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function settings(){
        $allOrders = OrderPickup::all()->count();
        $return = [
            "all" => $allOrders,
        ];
        return view("dashboard/setting", $return);
    }

    public function reports(){
        $allOrders = OrderPickup::all()->count();
        $complete = OrderPickup::where('status','1')->count();
        $waiting = OrderPickup::where('status', '0')->count();

        $orderData = OrderPickup::get("created_at");
        $today = OrderPickup::get("created_at");
        $now = Carbon::now()->format("d");


        //all orders data for graph
        // $allOrdersData = OrderPickup::all();
        $dateWiseOrderData = OrderPickup::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
            ->groupBy('date')
           ->where("order_date","=",Carbon::now()->format("m"))
         ->get();
        // dd($dateWiseOrderData);


        //counting todays orders
        $counter=0;
        foreach($today as $output){
            if(Carbon::create($output->created_at)->format("d")==$now)
            {
                $counter++;
            }
        }
        $return = [
            "all" => $allOrders,
            "complete" => $complete,
            "waiting" => $waiting,
            "today" => $counter,
            "ordersData" => $dateWiseOrderData
        ];
        return view("dashboard/reports",$return);
    }

    public function settingsUpdate (Request $request){
        // return $request;
        User::where("id",$request->id)
        ->update([
            "name" => $request->name,
            "email" => $request->email,
            "phone_no" => $request->phone,
        ]);
        Session::flash("success", "Profile updated successfuly");

        return back();
        
    }

    public function passwordUpdate(Request $request){
        $request->validate([
            "old" => 'required',
            "new" => 'required|min:6',
            "new_confirm" => 'required',
        ]);

        $data = User::find( Auth::user()->id);
        
        if( ! Hash::check(($request->old) , $data->password ))
{
    Session::flash("error", "Please enter correct password");
    return back();
}
else{
    $newPassword = Hash::make($request->new);
    User::where("id",$data->id)->update([
        "password" => $newPassword,
    ]);
    Session::flash("success", "Password Updated");
    return back();
}
    }


    public function customer_form(){
        $allOrders = OrderPickup::all()->count();
        $data = FormField::all();
        $colors = VehicleColor::all();
        $types = VehicleType::all();
        $return = [
            "data" => $data,
            "vcolor" => $colors,
            "vtype" => $types,
            "all" => $allOrders
        ];
        return view("dashboard/formsetting", $return);
    }

    public function siteSetting(){
        $allOrders = OrderPickup::all()->count();
        $data = LocationInfo::where("id","1")->first();
        // return $data;
        $return = [
            "data" => $data,
            "all" => $allOrders
        ];
        return view("dashboard/sitesetting",$return);
    }

    public function shown(Request $request){
        $shown = $request->shown;
        $update = '';
        if($shown==1){
            $update=0;
        }else{
            $update=1;
        }
        FormField::where("id",$request->id)->update([
            "shown" => $update,
        ]);
        return back();
    }

    public function required(Request $request){
        $shown = $request->required;
        $update = '';
        if($shown==1){
            $update=0;
        }else{
            $update=1;
        }
        FormField::where("id",$request->id)->update([
            "required" => $update,
        ]);
        return back();
    }

    public function audioForm (Request $request){
        $stored_orders = OrderPickup::all();
        $stored = $stored_orders->count();
        $sound = LocationInfo::where("id", "1")->first();
        $newOrders = $stored - $request->allOrder;
        if($sound->playsound != null ||  $sound->playsound != "off"){
            if($stored > $request->allOrder){
                return $newOrders;
            }else{
                return 0;
            }
        }
    }

}
