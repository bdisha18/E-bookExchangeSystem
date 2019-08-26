<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Document;
use App\Model\Category;
use App\Http\Controllers\Controller;
use App\Repositories\PublisherRepository;

class PublisherController extends Controller
{
    
    protected $publisherRepository;

    public function __construct(PublisherRepository $publisherRepository) {
        $this->publisherRepository = $publisherRepository;
    }

  
    public function index(Request $request) {   

      $publishers = $this->publisherRepository->index($request);
        return view('backend.publisher.index', compact('publishers'));
    }

    public function create() {
        $categories = Category::where(['type'=> 'document'])->get();
        return view('backend.publisher.create', compact('categories'));
    }

    public function store(Request $request) {
        // $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'fname' => 'required|max:20',
        // ]);
                
        $this->publisherRepository->store($request);
        return redirect()->route('publisher.index')->with('status', 'Publisher Created Successfully.');
    }

    public function view($id)
    {
        $publisher = $this->publisherRepository->find($id);
        return view('backend.publisher.view', compact('publisher'));
    }
    
    public function edit($id) {
        $publishers = Document::all();
        $categories = Category::where(['type'=> 'document'])->get();
        $publisher = $this->publisherRepository->find($id);
        return view('backend.publisher.edit', compact('publisher', 'publishers', 'categories'));
    }

   
    public function update(Request $request, $id){
        //  $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password'=>'confirmed',
        //     'password_confirmation'=>'sometimes|required_with:password'
        // ]);
        $this->publisherRepository->update($request, $id);
        return redirect()->route('publisher.index')->with('status', 'Updated Successfully.');
    }

    public function delete($id) {
        $this->publisherRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    }

     public function status() {
        $request = Input::all();
        $this->publisherRepository->update($request, $request['id']);
    }
 
}
