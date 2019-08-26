<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Model\Book;
use App\Model\Favourite;
use App\Model\Category;
use App\Model\Testimonial;
use App\Model\Newsletter;
use Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
       public function index()
       {	
       		$books = Book::all();
       		$new_books = Book::orderBy('created_at')->get()->take(6);
       		$categories = Category::where(['parent_id'=> 0, 'type' => 'book'])->get()->take(8);
       		$testimonials = Testimonial::all();
       		$favorites = Favourite::select('book_id')->where(['user_id' => Auth::guard('member')->user()->user_id])->get()->toArray();
                     $favorite_id = array_column($favorites, 'book_id');
           return view('frontend.home', compact('books', 'categories', 'testimonials', 'new_books', 'favorites', 'favorite_id'));
       }

       public function newsletter_store(){
       	$request = Input::all();
       	$checkExist = Newsletter::where(['email' => $request['email']])->first();
       	if($checkExist){
       		return $return = [
       			'status' =>false, 
       			'message' => 'You are Already Subscribed'
       		];
       	}
       	$create = Newsletter::create($request);
       	if($create){
       		$return = [
       			'status' =>true,
       			'message' =>'Thank You For Subscribe'
       		];
       	}else{
       		$return = [
       			'status' => false,
       			'message' => 'Something Went Wrong'
       		];
       	}

       	return $return;
       }


       public function favorite_update(Request $request, $id = null){
              $data = $request->all();
              $data['user_id'] = Auth::guard('member')->user()->user_id;
              $favorite = Favourite::where(['user_id' => Auth::guard('member')->user()->user_id])->where('book_id', $data['id'])->first();
              if($favorite){
                     $favorite->delete();
                     return back()->with('error', 'Deleted Successfully');
              }else{
              Favourite::create([
                     'book_id' => $data['id'],
                     'user_id' => $data['user_id'],
              ]);
              return back()->with('success', 'Add Successfully');
              }
       }

}
