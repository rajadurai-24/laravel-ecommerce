<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    

    protected $fillable =[
        'user_id',
        'grand_totel',
        'payment_method',
        'payment_status',
        'status',
        'currency',
        'shipping_amount',
        'shipping_method',
        'notes',
    ];

    public function user(){
         return $this->belongsTo(User::class);
    }

    public function items(){
         return $this->hasMany(OrderItem::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }
}
