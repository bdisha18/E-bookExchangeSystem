<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'email_name','user_id','fname','lname','subject','message','order_id','transaction_id','status',
        'created_at','updated_at'
        
    ];
}
