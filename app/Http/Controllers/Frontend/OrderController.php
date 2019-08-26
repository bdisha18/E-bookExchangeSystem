<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Model\Order;
use App\Helper\Common;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{

	public function index(){
		$orders = Order::where('user_id', Auth::guard('member')->user()->user_id)->get();
        
        // dd($orders);
		return view('frontend.order.index', compact('orders'));		
	}
}
