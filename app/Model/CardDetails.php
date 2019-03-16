<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardDetails extends Model
{
    protected $primaryKey = 'card_id';
    
    protected $fillable = [
         'card_no','bank_name','expire_date','cardholder_name','user_id','created_at','updated_at'  
    ];
}
