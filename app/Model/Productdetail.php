<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Productdetail extends Model
{
	protected $table = 'productdetails';
    protected $primaryKey = 'id';

    protected $fillable = [
      'id', 'book_id', 'user_id', 'order_id', 'created_at','updated_at' 
    ];

    
}
