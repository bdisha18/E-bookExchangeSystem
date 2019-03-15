<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $fillable = [
        'category_id','offer_title','offer_description','terms$condition','start_date',
        'end_date','dis_amount','book_id'
    ];
}
