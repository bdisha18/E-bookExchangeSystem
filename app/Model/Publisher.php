<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publishers';
    protected $primaryKey = 'publisher_id';
    public $timestamps = false;

    protected $fillable = [
        'publisher_id',
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
