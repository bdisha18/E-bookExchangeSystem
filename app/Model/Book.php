<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    public $timestamps = false;
    protected $primaryKey = 'book_id';
    protected $fillable = [
        'category_id',
        'type',
        'book_name',
        'book_image',
        'author_name',
        'book_rating',
        'book_price',
        'dicounted_price',
        '%discount',
        'description',
        'pages',
        'book_available',
        'file',
        'publisher',
        'released_date',
        'status',
        'created_at',
        'updated_at',
    ];
}

