<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        //insert into user table
        DB::table('users')->insert([

            ['name' => "admin",'email'=>'admin@gmail.com', 'is_admin' => '1','phone_no'=>'03084211442','password'=> Hash::make('admin')],
        
        ]);


        //insert into location info
        DB::table('location_infos')->insert([

            ['name' => "Palm",'address'=>'Gulburg Lahore','street'=>'A1','house_no'=> 'a2', 'zip' => '632500', 'phone_no' => '03084211442', 'message' => 'This is dummy message'],
        
        ]);

        //insert into form fields
        DB::table('form_fields')->insert([

            ['field' => "Name",'shown'=>'1','required'=>'1'],
            ['field' => "Phone No",'shown'=>'1','required'=>'1'],
            ['field' => "Order No",'shown'=>'1','required'=>'1'],
            ['field' => "Vehicle Color",'shown'=>'1','required'=>'1'],
            ['field' => "Vehicle Type",'shown'=>'1','required'=>'1'],
            ['field' => "Parking",'shown'=>'1','required'=>'1'],
            ['field' => "Detail",'shown'=>'1','required'=>'1'],
            ['field' => "Name",'shown'=>'1','required'=>'1']
        
        ]);

        //insert into form fields table
        // DB::table('users')->insert([

        //     ['name' => "abc",'email'=>'abc@gmail.com','phone_no'=>'03084211442','password'=> Hash::make('12345678')],
        
        // ]);
        // \App\Models\User::factory(10)->create();
        // $user = [
        //     [
        //        'name'=>'Admin',
        //        'email'=>'admin@gmail.com',
        //         'is_admin'=>'1',
        //        'password'=> bcrypt('admin'),
        //     ],
           
        // ];
  
        // foreach ($user as $key => $value) {
        //     User::create($value);
        // }
    }
}
