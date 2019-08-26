<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Model\Book;
use App\Model\Category;
use App\Model\Favourite;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Helper\Common;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	public function index($id){
		$product = Book::where('book_id', $id)->first();
		$similar_products = Book::where('category_id', $product->category_id)->where('book_id', '!=', $id)->get();
		$author_products = Book::where('author_name', $product->author_name)->where('book_id', '!=', $id)->get();
		return view('frontend.product.index', compact('similar_products', 'product', 'author_products'));		
	}

	public function category(){
		$book_category = Category::where(['parent_id' => 0, 'type' => 'book'])->get();
		$editors_choice = Book::where('type', 'book')->get();
		$interests = Category::where('parent_id', '!=', 0)->where('type', 'book')->get();
		
		return view('frontend.product.category', compact('book_category', 'editors_choice', 'interests')); 
	}

	public function list($id = null){
		$subcategories = Category::where(['parent_id' => $id, 'type' => 'book'])->get();
		$subcategoriesId = [];
		foreach ($subcategories as  $value) {
			$subcategoriesId[] = $value->id;
		}
		$books = Book::where(['type'=> 'book'])->whereIn('category_id',$subcategoriesId)->get();
		return view('frontend.product.list', compact('subcategories', 'books'));
	}

	public function magazine(){
		$categories = Category::where(['parent_id' => 0, 'type' =>'book'])->get();
		$magazines = [];
		foreach($categories as $key => $value){
		$magazine = Book::where(['type' => 'magazine'])->where('category_id', $value->id)->get();
			$magazines[$value->id]['magazine'] = $magazine;
			$magazines[$value->id]['category'] = $value;
		}
		$favorites = Favourite::select('book_id')->where(['user_id' => Auth::guard('member')->user()->user_id])->get()->toArray();
                     $favorite_id = array_column($favorites, 'book_id');
		return view('frontend.product.magazine', compact('categories', 'magazines', 'favorites', 'favorite_id'));
	}

	public function audiobook(){
		$book_category = Category::where(['parent_id' => 0, 'type' => 'book'])->get();
		$editors_choice = Book::where('type', 'audiobook')->get();
		$interests = Category::where('parent_id', '!=', 0)->where('type', 'book')->get();
		return view('frontend.product.category', compact('book_category', 'editors_choice', 'interests')); 
	}


	public function audiobook_list($id = null){
		$subcategories = Category::where(['parent_id' => $id, 'type' => 'book'])->get();
		$subcategoriesId = [];
		foreach ($subcategories as  $value) {
			$subcategoriesId[] = $value->id;
		}
		$books = Book::where(['type'=> 'audiobook'])->whereIn('category_id',$subcategoriesId)->get();
		return view('frontend.product.list', compact('subcategories', 'books'));
	}

}
