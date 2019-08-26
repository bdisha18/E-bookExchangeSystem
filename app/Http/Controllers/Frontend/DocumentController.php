<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Model\Document;
use App\Model\Category;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Helper\Common;
use App\Http\Controllers\Controller;

class DocumentController extends Controller
{
	// public function index($id){
	// 	$product = Book::where('book_id', $id)->first();
	// 	$similar_products = Book::all();
	// 	return view('frontend.product.index', compact('similar_products', 'product'));		
	// }

	public function category(){
		$categories = Category::where(['type' => 'document', 'parent_id' => 0])->get();
		$documents = [];
		foreach($categories as $key => $value){
			$document = Document::where(['status' => 'active'])->where('category_id', $value->id)->get();
			$documents[$value->id]['document'] = $document;
			$documents[$value->id]['category'] = $value;
		}
		return view('frontend.document.category', compact('categories', 'documents')); 
	}

	// public function list($id = null){
	// 	$subcategories = Category::where(['parent_id' => $id, 'type' => 'book'])->get();
	// 	$subcategoriesId = [];
	// 	foreach ($subcategories as  $value) {
	// 		$subcategoriesId[] = $value->id;
	// 	}
	// 	$books = Book::where(['type'=> 'book'])->whereIn('category_id',$subcategoriesId)->get();
	// 	return view('frontend.product.list', compact('subcategories', 'books'));
	// }

}
