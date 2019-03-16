<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $primaryKey = 'template_id';
    protected $fillable = [
        'email_name','subject','message','created_at','updated_at'
    ];
            
}
