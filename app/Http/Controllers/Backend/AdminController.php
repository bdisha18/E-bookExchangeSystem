<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use App\Repositories\AdminRepository;

class AdminController extends Controller
{
    
    protected $adminRepository;

    public function __construct(AdminRepository $adminRepository) {
        $this->adminRepository = $adminRepository;
    }


 	  public function dashboard() {
        return view('backend.admin.dashboard');
    }

  
    public function index() {   

      $admins = $this->adminRepository->index();
        return view('backend.admin.index', compact('admins'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'fname' => 'required|max:20',
        ]);
                
        $this->adminRepository->store($request);
        return redirect()->route('admin.index')->with('status', 'Admin Created Successfully.');
    }

    
    public function edit($id) {
        $admins = User::all();
        $admin = $this->adminRepository->find($id);
        return view('backend.admin.edit', compact('admin', 'admins'));
    }

   
    public function update(Request $request, $id){
        //  $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password'=>'confirmed',
        //     'password_confirmation'=>'sometimes|required_with:password'
        // ]);
        $this->adminRepository->update($request, $id);
        return redirect()->route('admin.index')->with('status', 'Updated Successfully.');
    }

    public function delete($id) {
        $this->adminRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    }

     public function status() {
        $request = Input::all();
        $this->adminRepository->update($request, $request['admin_id']);
    }
 
}
