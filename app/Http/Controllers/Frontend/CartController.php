<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Model\Book;
use App\Model\Cart;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Helper\Common;
use App\Http\Controllers\Controller;

class CartController extends Controller
{

	public function index(){
		$carts = Cart::where('user_id', Auth::guard('member')->user()->user_id)->get();
		return view('frontend.cart.index', compact('carts'));		
	}

	public function addToCart($id){

        $product = Book::find($id);
        $quantity = 1;
        $productExist = Cart::where('user_id', Auth::guard('member')->user()->user_id)->where('book_id', $product->book_id)->first();
        if(!$productExist){

        	Cart::create([
        		'book_id' => $product->book_id,
        		'user_id' => Auth::guard('member')->user()->user_id,
        		'quantity' => $quantity,
        		'total_amount' => $product->book_price,
        	]);
        }else{
        	$price = $productExist->quantity * $product->book_price ;
        	$productExist->update([
        		'quantity' => $quantity++,
        		'total_amount' => $price
        	]);
        }
            return redirect()->route('cart.index');
        }

        public function delete($id){
        $product = Cart::where('cart_id', $id)->first();
        $product->delete();
        return back()->with('status', 'Deleted Successfuly.');
        }
   

    public function whishlist(){	
        $products = Book::all();
        return view('frontend.cart.whishlist', compact('products'));
    }


}
