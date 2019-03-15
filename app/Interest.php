<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
       'interest_id', 'user_id','name','created_at','updated_at'
    ];
}
