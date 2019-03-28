<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Productdetail extends Model
{
    protected $primarykey = "id";
    protected $fillable = [
      'order_id','book_id','created_at','updated_at'  
    ];
}
