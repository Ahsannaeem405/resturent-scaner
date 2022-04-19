<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderPickup;
use Carbon\Carbon;
class WaitingOrderController extends Controller
{
    public function listing(){
    

        $waitingOrders=OrderPickup::where("order_pickups.status","=","0")
        ->join("vehicle_colors", "vehicle_colors.id","=","order_pickups.vehicle_color")
        ->join("vehicle_types", "vehicle_types.id","=","order_pickups.vehicle_type")
        ->select("order_pickups.*", "vehicle_types.type", "vehicle_colors.color")
        ->get();
        $r=orderpickup::get();
        $r->each(function($q){
          $q->update(['is_read'=>1]);
      });
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
        $r=orderpickup::get();
        $r->each(function($q){
          $q->update(['is_fullfill'=>1]);
      });
        $return = [
            "all" => $allOrders,
            "orders" => $waitingOrders
        ];
        return view("dashboard/complete", $return);
    }
    public function ordercheck(){
        $data = OrderPickup::where('is_read',0)->get();
        //return response()->json($data);
        //dd($data);
        $data->each(function($q){
            $q->update(['is_read'=>1]);
        });
        $html='';
       foreach($data as $output)
       {
            $html.=' <div class="col-12 mt-3">
            <div class="waiting-order d-md-flex justify-content-between align-items-center p-3">
                <div class="order-details"id="detail">
                    <div>
                    <h6> <span>'.$output->name.'</span>'.$output->phone_no.' &nbsp;'.$output->parking.'</h6>
                    <div class="order-info ">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item px-3 border-right">'.$output->color.' </li>
                            <li class="list-inline-item px-3 border-right">'.$output->type.' </li>
                            <li class="list-inline-item px-3 border-right">'.$output->order_no.' </li>
                            <li class="list-inline-item px-3">
                    
                            Order time:  <span class="timedate d-none">'.$output->created_at.'</span> 
                            
                            
                            <span class="showtime" style="color: #fd0707">"0d 0h 0m 0s"</span>  
                            
                            </li>
                        </ul>';
                        if($output->order_detail!=null)
                        {
                        $html.='<h6><b>Note:</b>'.$output->order_detail.' </h6>';
                        }
                    
                    $html.='</div>
                    </div>
                    
                </div>
                <div class="order-status  mt-3 mt-md-0">
                    <div class="d-flex align-items-center justify-content-center">
                        
                        
                        <a href="'.route('waiting/status', ['status' => $output->status, 'id' => $output->id]).'">
                            <button  class="btn btn-primary">Already Cleared</button>
                            </a> 
                    </div>
                </div>
            </div>
        </div>';
       }
      
        return response()->json($html);
    }
    public function completecheck(){
        $data = OrderPickup::where('status',1)->where('is_fullfill',0)->get();
        //return response()->json($data);
        //dd($data);
        $data->each(function($q){
            $q->update(['is_fullfill'=>1]);
        });
        $html='';
       foreach($data as $output)
       {
            $html.=' <div class="col-12 mt-3">
            <div class="waiting-order d-md-flex justify-content-between align-items-center p-3">
                <div class="order-details"id="detail">
                    <div>
                    <h6> <span>'.$output->name.'</span>'.$output->phone_no.' &nbsp;'.$output->parking.'</h6>
                    <div class="order-info ">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item px-3 border-right">'.$output->color.' </li>
                            <li class="list-inline-item px-3 border-right">'.$output->type.' </li>
                            <li class="list-inline-item px-3 border-right">'.$output->order_no.' </li>
                            <li class="list-inline-item px-3">
                    
                            Order time:  <span class="timedate d-none">'.$output->created_at.'</span> 
                            <span class="fullfill d-none">'.$output->fullfill.'</span> 
                            
                            <span class="showtime" style="color: #fd0707">"0d 0h 0m 0s"</span>  
                            
                            </li>
                        </ul>';
                        if($output->order_detail!=null)
                        {
                        $html.='<h6><b>Note:</b>'.$output->order_detail.' </h6>';
                        }
                    
                    $html.='</div>
                    </div>
                    
                </div>
                <div class="order-status  mt-3 mt-md-0">
                    <div class="d-flex align-items-center justify-content-center">
                        
                        
                        <a href="'.route('complete/status', ['status' => $output->status, 'id' => $output->id]).'">
                            <button  class="btn btn-primary">Still Waiting</button>
                            </a> 
                    </div>
                </div>
            </div>
        </div>';
       }
      
        return response()->json($html);
    }
}
