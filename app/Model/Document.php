<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'user_id', 'file', 'category_id', 'status', 'decription', 'title',
        'created_at','updated_at'
        
    ];

    public function getMember()
    {
    	return $this->hasOne('App\Model\Member', 'user_id','user_id');
    }
}
