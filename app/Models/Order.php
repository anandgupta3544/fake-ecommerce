<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const STATUS_PLACED = 'Placed';
    const STATUS_OUT_FOR_DELIVERY = 'Out For Delivery';
    const STATUS_DELIVERED = 'Delivered';
}
