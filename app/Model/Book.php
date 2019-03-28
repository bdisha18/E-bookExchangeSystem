<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    public $timestamps = false;
    protected $primaryKey = 'book_id';
    protected $fillable = [
        'category',
        'type',
        'book_name',
        'book_image',
        'author_name',
        'book_rating',
        'book_price',
        'description',
        'pages',
        'book_available',
        'file',
        'status',
        'created_at',
        'updated_at',
    ];
}
