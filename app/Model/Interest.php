<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $primaryKey = 'interest_id';
    protected $fillable = [
       'user_id','name','created_at','updated_at'
    ];
}
