<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'email_id','user_id','fname','lname','subject','message'
    ];
}
