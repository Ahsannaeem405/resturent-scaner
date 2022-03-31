<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\LocationInfo::factory(1)->create();
        
        // $user = [
        //     [
        //        'name'=>'Admin',
        //        'address'=>'Gulburg Lahore, punjab Pakistan',
        //         'street'=>'street',
        //        'phone_no'=> '03084211442',
        //        'message'=> 'This is dummy message, you can type here your own message here',
               
        //     ],
           
        // ];
  
        // foreach ($user as $key => $value) {
        //     LocationInfo::create($value);
        // }
    }
}
