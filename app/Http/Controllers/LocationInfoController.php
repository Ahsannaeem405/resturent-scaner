<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocationInfo;

class LocationInfoController extends Controller
{
    public function info(Request $request){
        $file = $request->file("image");
        $upload_file=false;
         if($file=='' || $file==null){
            $file_name = LocationInfo::where("id","1")->first();
            $file_name = $file_name->site_logo;
        }else{
            $ext = $file->getClientOriginalExtension();
            $file_name = $file->getClientOriginalName();
            $file_name = rand(1111111,9999999)."-img.".$ext;
            $destinationPath = 'uploads';
            $upload_file= $file->move($destinationPath,$file_name);
        }
      
           LocationInfo::where("id","1")->update([
               "name" => $request->name,
               "address" => $request->address,
               "street" => $request->street,
               "house_no" => $request->house_no,
               "zip" => $request->zip,
               "phone_no" => $request->phone_no,
               "playsound" => $request->sound,
               "site_logo" => $file_name,
               "message" => $request->message,
           ]);
           return back();
      
    }

    public function soundplay(Request $request){
        if($request->status=='on'){
            $request->status='off';
        }else{
            $request->status='on';
        }

        LocationInfo::where("id",$request->id)->update([
            "playsound" => $request->status,
        ]);
        return back();
    }
}
