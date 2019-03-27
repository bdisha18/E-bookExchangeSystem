<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'parent_id','category_name','created_at','updated_at'
    ];
}
