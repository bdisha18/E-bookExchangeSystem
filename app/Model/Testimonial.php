<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
      'image','author_name','description','created_at','updated_at'  
    ];
}
