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

        if($request->book_image){
        $image = Common::uploadImage($request->book_image,env('BOOK_IMAGE_PATH'));
        $input['book_image'] = $image;
        }
        Book::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $book = Book::findOrFail($id);
        $input= array_filter(Input::all());

        if(Input::hasFile('book_image'))
        {
            $image = public_path().'/'.env('BOOK_IMAGE_PATH').$book->book_image;
                if (file_exists($image) && $book->book_image) { 
                    unlink($image);
                }
            $image = Common::uploadImage($input['book_image'],env('BOOK_IMAGE_PATH'));
            $input['book_image'] = $image;
            dd($input);  
        }

         if(Input::hasFile('file'))
        {
            $image = public_path().'/'.env('BOOK_IMAGE_PATH').$book->file;
                if (file_exists($image) && $book->file) { 
                    unlink($image);
                }
            $image = Common::uploadImage($input['file'],env('BOOK_IMAGE_PATH'));
            $input['file'] = $image;
        }
        $book->update($input);
         return $input;
    }
}
