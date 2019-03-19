<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Book;
use App\Http\Controllers\Controller;
use App\Repositories\BookRepository;

class BookController extends Controller
{
    protected $bookRepository;

    public function __construct(BookRepository $bookRepository) {
        $this->bookRepository = $bookRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $books = $this->bookRepository->index($request);
        return view('backend.book.index', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->bookRepository->store($request);
        return redirect()->route('book.index')->with('status', 'Books Created Successfully.');

    }
     public function create() {
        return view('backend.book.create');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $books = Book::all();
        $Book = $this->bookRepository->find($id);
        return view('backend.book.edit', compact('book', 'books'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $this->bookRepository->update($request, $id);
        return redirect()->route('book.index')->with('status', 'Updated Successfully.');

    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->bookRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    
    }
         public function status() {
        $request = Input::all();
        $this->bookRepository->update($request, $request['id']);
    }

}
