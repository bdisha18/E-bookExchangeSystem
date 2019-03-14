<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
        protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'user_id',
        'publisher_name',
        'books_published',
        'pub_bookname',
        'book_name',
        'writer_name',
        'book_category',
        'cover_image',
    ];
}
