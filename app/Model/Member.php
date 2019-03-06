<?php
namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable;

    protected $table = 'members';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id', 'username', 'fname', 'lname', 'city', 'country', 
        'email', 'image', 'status', 'contactno', 'bio', 'gender', 'birth_date', 'gmail_link', 'created_at', 'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
   

}
