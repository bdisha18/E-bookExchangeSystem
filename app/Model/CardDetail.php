<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CardDetail extends Model
{
    protected $primaryKey = 'card_id';
    
    protected $fillable = [
         'card_no','bank_name','expiry_month', 'expiry_year','cardholder_name','user_id','created_at','updated_at'  
    ];
}
