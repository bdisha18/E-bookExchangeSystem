<?php
namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use Notifiable;

    protected $table = 'members';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'username', 'fname', 'lname','password',
        'email', 'image', 'status', 'contactno','category','dob', 'gender','gmail_link','fb_link',
        'created_at', 'updated_at',
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
