<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
       'book_id','rating','created_at','updated_at'
    ];
}
