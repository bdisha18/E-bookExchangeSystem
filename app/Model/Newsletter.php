<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
	protected $table = 'newsletters';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
      'id', 'email','created_at','updated_at'
    ];
}
