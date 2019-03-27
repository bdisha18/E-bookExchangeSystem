<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $primaryKey = 'cart_id';
    protected $fillable = [
        'book_id','user_id','total_amount','created_at','updated_at'
    ];
}
