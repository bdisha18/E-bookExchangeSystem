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
        'status',
        'created_at',
        'updated_at'
    ];

    public function order_details(){
    	return $this->hasMany('App\Model\Productdetail', 'order_id', 'order_id');
    }
}
