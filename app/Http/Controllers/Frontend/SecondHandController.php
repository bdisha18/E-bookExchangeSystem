<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Model\Member;
use App\Model\SecondBook;
use App\Model\Book;
use App\Helper\Common;
use App\Http\Controllers\Controller;

class SecondHandController extends Controller
{

    public function index(){
    	$books = Book::all();
        return view('frontend.secondhand.index', compact('books'));
    }

    public function store(Request $request){
        $data = Input::all();
        $data['user_id'] = Auth::guard('member')->user()->user_id;
        unset($data['_token']);
		foreach($data['book_name'] as $key => $value){
			$book_name = $value;
			$author_name = $data['author_name'][$key];
			$price = $data['price'][$key];
			$year = $data['years'][$key];
            $image = null;
			if($data['image'][$key]){
			$image = Common::uploadImage($data['image'][$key], env('BOOK_IMAGE_PATH'));
			}
        SecondBook::create(['book_name' => $book_name,
        	'author_name' => $author_name,
        	'price' => $price,
        	'years' => $year,
        	'image' => $image,
        	'user_id' => $data['user_id']
        ]);
	}

        return redirect()->route('second.index');
		} 
    }


