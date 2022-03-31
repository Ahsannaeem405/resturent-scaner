<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\FormField::factory(1)->create();

        $field = [
            [
               'field'=>'name',
               'shown'=>'1',
                'required'=>'1',
            ],

            [
               'field'=>'phone_no',
               'shown'=>'1',
                'required'=>'1',
            ],
            [
                'field'=>'order_no',
                'shown'=>'1',
                 'required'=>'1',
             ],
             [
                'field'=>'vehicle_color',
                'shown'=>'1',
                 'required'=>'1',
             ],
             [
                'field'=>'vehicle_type',
                'shown'=>'1',
                 'required'=>'1',
             ],
             [
                'field'=>'parking',
                'shown'=>'1',
                 'required'=>'1',
             ],
             [
                'field'=>'detail',
                'shown'=>'1',
                 'required'=>'1',
             ]
        ];
  
        foreach ($field as $key => $value) {
            FormField::create($value);
    }
}
}