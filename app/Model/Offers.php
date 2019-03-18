<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $primaryKey = 'offer_id';
    protected $table = 'offers';
    protected $fillable = [
        'category_id','offer_title','offer_description','terms&conditions','start_date',
        'end_date','discount_amount','book_id','status','created_at','updated_at'
    ];
}
