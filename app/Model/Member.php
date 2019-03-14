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
        'id', 'username', 'fname', 'lname','state', 'city', 'country','password',
        'email', 'image', 'status', 'contactno', 'gender','gmail_link','fb_link','created_at', 'updated_at',
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
