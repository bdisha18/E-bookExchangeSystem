<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Model\Member;
use App\Model\Interest;
use App\Model\Address;
use App\Model\Category;
use App\Helper\Common;
use Hash;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index(){
        $users = Member::where('user_id', Auth::guard('member')->user()->user_id)->first();
        return view('frontend.user.index', compact('users'));
    }

	public function edit(){
		$users = Member::where('user_id', Auth::guard('member')->user()->user_id)->first();
		$interests = Interest::where('user_id', $users->user_id)->get();
        $categories = Category::all();
		return view('frontend.user.edit', compact('users', 'interests', 'categories'));		
	}

    public function update(){	
        $users = Member::where('user_id', Auth::guard('member')->user()->user_id)->first();
        $input= array_filter(Input::all());

        if(Input::hasFile('image'))
        {
        $image = public_path().'/'.env('USER_IMAGE_PATH').$users->image;
        if (file_exists($image) && $users->image) { 
            unlink($image);
        }
        $image = Common::uploadImage($input['image'],env('USER_IMAGE_PATH'));
        $input['image'] = $image;
        }
         $users->update($input);
         return redirect()->route('user.edit');
    }

    public function edit_password(){
        return view('frontend.user.password');   
    }

    public function update_password(Request $request){
        $this->validate($request, [
        'old_password'     => 'required',
        'password'     => 'required|min:6',
        'confirm_password' => 'required|same:password',
        ]);

        $data = $request->all();
        $id = Auth::guard('member')->user()->user_id;
        $user = Member::where('user_id', $id)->first();
        if(!Hash::check($data['old_password'], $user->password)){
             return back()
                        ->with('error','The specified password does not match the database password');
        }else{
            $data['password'] = bcrypt($data['password']);
            $user->update($data);
            return redirect()->route('password.edit');
        }
    }

    public function address(Request $request){
       
        $data = $request->all();
        $data['user_id'] = Auth::guard('member')->user()->user_id;
        Address::create($data);
        return redirect()->route('user.edit');
    }

    public function address_delete($id){
        $address = Address::where('id', $id)->first();
        $address->delete();
        return back()->with('status', 'Deleted Successfuly.');
    }

    public function interest_update(Request $request, $id){
        $interest = Interest::find($id);
        $data = $request::all();
        $interst->update($data);
        return redirect()->route('user.edit');
    }


}
