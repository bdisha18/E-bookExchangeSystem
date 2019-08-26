<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
    protected $fillable = [
        'order_id',
        'transaction_id',
        'user_id',
        'address_id',
        'status',
        'created_at',
        'updated_at'
    ];

    public function product(){
    	return $this->belongsTo('App\Model\Productdetail', 'id', 'order_id');
    }
}
