<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Publisher;
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

    
    public function edit($id) {
        $publishers = Publisher::all();
        $publisher = $this->publisherRepository->find($id);
        return view('backend.publisher.edit', compact('publisher', 'publishers'));
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
