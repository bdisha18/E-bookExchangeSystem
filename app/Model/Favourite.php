<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id','book_id','created_at','updated_at'
    ];


public function getUser(){
	return $this->hasOne('App\Model\Member', 'user_id', 'user_id');
	}
}

