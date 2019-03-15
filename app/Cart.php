<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'book_id','user_id','book_name','amount','status','total_amount'
    ];
}
