<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPickup extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        
        'phone_no',
        'order_no',
        'order_date',
        'vehicle_color',
        'vehicle_type',
        'parking',
        'order_detail',
        'status',
        'is_read',
        'is_fullfill',
    ];
}
