<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
   

    protected $primaryKey = 'transaction_id';
    protected $table = 'transactions';
            
    protected $fillable = [
        'user_id','amount','reference_id','payment_method','card_no','status',
        'order_id','bank_name','total_cashback','card_holder_name','expire_date',
        'discount','created_at','updated_at'
    ];
}
