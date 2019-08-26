<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
	protected $table = 'interests';
    protected $primaryKey = 'interest_id';
    public $timestamps = false;
    
    protected $fillable = [
      'interest_id', 'user_id','category_id','image','created_at','updated_at'
    ];
}
