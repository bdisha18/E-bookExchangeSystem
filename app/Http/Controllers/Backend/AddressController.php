<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Address;
use App\Http\Controllers\Controller;
use App\Repositories\AddressRepository;

class AddressController extends Controller
{
    
    protected $addressRepository;

    public function __construct(AddressRepository $addressRepository) {
        $this->addressRepository = $addressRepository;
    }

  
    public function index(Request $request) {   

      $addresses = $this->addressRepository->index($request);
        return view('backend.address.index', compact('addresses'));
    }

    public function create() {
        return view('backend.address.create');
    }

    public function store(Request $request) {
        // $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'fname' => 'required|max:20',
        // ]);
                
        $this->addressRepository->store($request);
        return redirect()->route('address.index')->with('status', 'Address Created Successfully.');
    }

    public function view($id)
    {
        $address = $this->addressRepository->find($id);
        return view('backend.address.view', compact('address'));
    }
    
    public function edit($id) {
        $addresses = Address::all();
        $address = $this->addressRepository->find($id);
        return view('backend.address.edit', compact('address', 'addresses'));
    }

   
    public function update(Request $request, $id){
        //  $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password'=>'confirmed',
        //     'password_confirmation'=>'sometimes|required_with:password'
        // ]);
        $this->addressRepository->update($request, $id);
        return redirect()->route('address.index')->with('status', 'Updated Successfully.');
    }

    public function delete($id) {
        $this->addressRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    }

     public function status() {
        $request = Input::all();
        $this->addressRepository->update($request, $request['id']);
    }
 
}
