<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $table = 'contacts';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'id', 'name', 'email', 'message','created_at','updated_at' 
    ];
}
