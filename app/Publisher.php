<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
        protected $primaryKey = 'publisher_id';

    protected $fillable = [
     
        'user_id',
        'publisher_name',
        'books_published',
        'publish_bookname',
        'book_category',
        'book_id',
        'status',
        
        'created_at',
        'updated_at'
    ];
}
