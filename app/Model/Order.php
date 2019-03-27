<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'order_id',
        'transaction_id',
        'user_id',
        'status',
        'created_at',
        'updated_at'
    ];
}
