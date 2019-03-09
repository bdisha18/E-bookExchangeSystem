<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Member;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    
    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }
 
  
    public function index(Request $request)
    {   

      $users = $this->userRepository->index($request);
        return view('backend.user.index', compact('users'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'fname' => 'required|max:20',
        ]);
                
        $this->userRepository->store($request);
        return redirect()->route('user.index')->with('status', 'User Created Successfully.');
    }

   
    public function view($id)
    {
        $user = $this->userRepository->find($id);
        return view('backend.user.view', compact('user'));
    }

    
    public function edit($id)
    {
        $users = Member::all();
        $user = $this->userRepository->find($id);
        return view('backend.user.edit', compact('user', 'users'));
    }

   
    public function update(Request $request, $id)
    {
        //  $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password'=>'confirmed',
        //     'password_confirmation'=>'sometimes|required_with:password'
        // ]);
        $this->userRepository->update($request, $id);
        return redirect()->route('user.index')->with('status', 'Updated Successfully.');
    }

     public function changeStatus() {
        $request = Input::all();
        $this->userRepository->update($request, $request['id']);
    }

}
