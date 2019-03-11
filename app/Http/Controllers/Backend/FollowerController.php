<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Member;
use App\Http\Controllers\Controller;
use App\Repositories\FollowerRepository;

class FollowerController extends Controller
{
    
    protected $followerRepository;

    public function __construct(FollowerRepository $followerRepository) {
        $this->followerRepository = $followerRepository;
    }
 
  
    public function index(Request $request)
    {   

      $followers = $this->followerRepository->index($request);
        return view('backend.follower.index', compact('followers'));
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'fname' => 'required|max:20',
        // ]);
                
        $this->followerRepository->store($request);
        return redirect()->route('follower.index')->with('status', 'followers Created Successfully.');
    }

   
    public function view($id)
    {
        $follower = $this->followerRepository->find($id);
        return view('backend.follower.view', compact('follower'));
    }

    
    public function edit($id)
    {
        $followers = Member::all();
        $follower = $this->followerRepository->find($id);
        return view('backend.follower.edit', compact('follower', 'followers'));
    }

   
    public function update(Request $request, $id)
    {
        //  $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password'=>'confirmed',
        //     'password_confirmation'=>'sometimes|required_with:password'
        // ]);
        $this->followerRepository->update($request, $id);
        return redirect()->route('follower.index')->with('status', 'Updated Successfully.');
    }

     public function changeStatus() {
        $request = Input::all();
        $this->followerRepository->update($request, $request['id']);
    }

}
