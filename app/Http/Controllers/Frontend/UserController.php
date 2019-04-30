<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
       public function dashboard() 
       {
             return view('frontend.user.dashboard');
       }
       public function index()
       {
           return view('frontend.user.index');
       }

}
