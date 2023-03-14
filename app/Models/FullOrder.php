<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FullOrder extends Model
{
    use HasFactory;
    protected $table = 'full_order';
    protected $fillable = ['admin_id', 'customer_id',
                    'sub_total', 'discount_total', 'total', 
                    'username', 'email', 'telephone', 'address', 
                    'payment_value', 'payment_status', 'order_value', 'order_status', 
                    'comment', 
                    'status', 'created_at', 'updated_at'];
}
