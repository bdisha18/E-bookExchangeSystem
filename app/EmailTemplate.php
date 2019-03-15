<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'email_name','subject','message','modified_at','created_at','updated_at'
    ];
            
}
