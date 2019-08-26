<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'email_name','user_id','fname','lname','subject','message','status',
        'created_at','updated_at'
        
    ];
}
