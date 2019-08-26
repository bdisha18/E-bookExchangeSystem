<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Model\Address;
use App\Model\Cart;
use App\Model\Order;
use App\Model\Productdetail;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Helper\Common;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{

    public function productDetail(){
        $products = Cart::where('user_id', Auth::guard('member')->user()->user_id)->get();
        foreach($products as $product){
        Productdetail::create([
            'user_id' => Auth::guard('member')->user()->user_id,
            'order_id' => $product->cart_id,
            'book_id' => $product->book_id
        ]);
       }
        return redirect()->route('payment.address');
    }

	public function address(){
        $user = Auth::guard('member')->user()->user_id;
        $addresses = Address::where('user_id', $user)->get();
        $products = Cart::where('user_id', $user)->get();
	   return view('frontend.payment.address', compact('addresses', 'products'));		
	}

    public function address_update($id, Request $request){
        $request = $request->all();
        dd($request);
        $request['user_id'] = Auth::guard('member')->user()->user_id;
        $address = Order::where(['user_id' => Auth::guard('member')->user()->user_id])->where('address_id', $request['id'])->first();
        // $request->session()->get('address_id', $request->address_id);
    }

}
