<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Model\Member;
use App\Model\Address;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{

    public function index($id = null){
         $addresses = Address::where('user_id', Auth::guard('member')->user()->user_id)->get();
         $edit_address = Address::where('id', $id)->first();
        return view('frontend.user.address', compact('addresses', 'edit_address'));
    }

    public function store(Request $request){
       
        $data = $request->all();
        $data['user_id'] = Auth::guard('member')->user()->user_id;
        Address::create($data);
        return redirect()->route('address.index');
    }

    public function update(Request $request, $id){
        $data = $request->all();
        $addresses = Address::where('id', $id)->first();
        $addresses->update($data);
        return redirect()->route('address.index');
    }


    public function delete($id){
        $address = Address::where('id', $id)->first();
        $address->delete();
        return back()->with('status', 'Deleted Successfuly.');
    }

}
