<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class AdminRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\User";
    }

     public function index() {
        $user = User::orderBy('admin_id', 'desc')->get();
        return $user;
    }


    public function store($request) {
        $input= array_filter(Input::all());

        if($request->image){
        $image = Common::uploadImage($request->image,env('ADMIN_IMAGE_PATH'));
        $input['image'] = $image;
  }
        if(isset($input['password'])) {
            $input['password'] = bcrypt($input['password']);
        }
        User::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $admin = User::findOrFail($id);
        $input= array_filter(Input::all());

        if(Input::hasFile('image'))
        {
        $image = public_path().'/'.env('ADMIN_IMAGE_PATH').$admin->image;
        if (file_exists($image)) { 
            unlink($image);
        }
        $image = Common::uploadImage($input['image'],env('ADMIN_IMAGE_PATH'));
        $input['image'] = $image;
   
        }
        if (empty($request->get('password'))){

            $admin->update($input, $request->except('password'));
        }else{
            
            $input['password'] = bcrypt($request->password);

            $admin->update($input);

        }
        return $input;
    }

}
