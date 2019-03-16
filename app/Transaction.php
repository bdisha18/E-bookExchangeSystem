<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
   

    protected $primaryKey = 'transaction_id';
            
    protected $fillable = [
        'user_id','card_id','amount','reference_id','payment_method','status',
        'order_id','total_cashback','discount','created_at','updated_at'
    ];
}
