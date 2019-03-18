<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $table = 'addresses';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'user_id','address','city','country','state','created_at','updated_at' 
    ];
}
