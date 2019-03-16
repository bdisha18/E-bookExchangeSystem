<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $primaryKey = 'favourite_id';
    protected $fillable = [
        'user_id','book_id','created_at','updated_at'
    ];
}
