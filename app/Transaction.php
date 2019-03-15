<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id','amount','reference_id','payment_method','card_no','status',
        'order_id','bank_name','total_cashback','card_holder_name','expire_date',
        'discount'
    ];
}
