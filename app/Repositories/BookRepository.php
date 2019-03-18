<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Model\Book;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class BookRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Book";
    }

    public function index($request) {
        
        if($request->search){
            $book = Book::where([ 
                ['book_name', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('book_id', 'desc')->paginate(10);
        }else{
            $book = Book::orderBy('book_id', 'desc')->paginate(10);
        }
            return $book;
    }

    public function store($request) {
        $input= array_filter(Input::all());

        if($request->image){
        $image = Common::uploadImage($request->image,env('USER_IMAGE_PATH'));
        $input['image'] = $image;
        }
        Book::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $book = Book::findOrFail($id);
        $input= array_filter(Input::all());

        if(Input::hasFile('image'))
        {
            $image = public_path().'/'.env('Book_IMAGE_PATH').$book->image;
                if (file_exists($image)) { 
                    unlink($image);
                }
            $image = Common::uploadImage($input['image'],env('Book_IMAGE_PATH'));
            $input['image'] = $image;
   
        }
        $book->update($input);
         return $input;
    }
}
