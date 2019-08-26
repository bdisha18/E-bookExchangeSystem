<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Model\Member;
use Session;
use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
       public function login(){	
       		return view('frontend.loginRegister.login');
       }


       public function dologin(Request $request){
       	$this->validate($request, array(
                                'email' => 'required|email|max:255',
                                'password' => 'required',
                            )
                        );
       	$user = array('email' => $request->email, 'password' => $request->password);
       	if (Auth::guard('member')->attempt($user)) {
            return redirect()->route('home.index');
        } else {
            return redirect()->route('user.login');
        } 
    }


       public function register(){	
       		return view('frontend.loginRegister.register');
       }


       public function register_store(Request $request){
       		$this->validate($request, array(
                                'fname' => 'required|max:255',
                                'email' => 'required|email|max:255|unique:users',
                                'password' => 'required|min:6|confirmed',
                            )
                        );
        Member::create(array(
                        'fname' => $request->fname,
                        'lname' => $request->lname, 
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                    ));
        Session::flash('flash_message', 'User registration successful!');
 
        return redirect()->route('user.login');
       }

       public function logout() {
        Auth::guard('member')->logout();        
        return redirect()->route('user.login');
    }
}
