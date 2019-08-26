<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SecondBook extends Model
{
	protected $table = 'secondbooks';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'id', 'user_id', 'book_name', 'author_name', 'price', 'years', 'image', 'created_at','updated_at' 
    ];
}
