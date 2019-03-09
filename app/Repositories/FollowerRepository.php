<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Model\Member;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class FollowerRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Member";
    }

    public function index($request) {
        
        if($request->search){
            $follower = Member::where([ 
                ['fname', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('id', 'desc')->paginate(10);
        }else{
            $follower = Member::orderBy('id', 'desc')->paginate(10);
        }
            return $follower;
    }

    public function store($request) {
        $input= array_filter(Input::all());

        if($request->image){
        $image = Common::uploadImage($request->image,env('USER_IMAGE_PATH'));
        $input['image'] = $image;
  }
        if(isset($input['password'])) {
            $input['password'] = bcrypt($input['password']);
        }
        Member::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $follower = Member::findOrFail($id);
        $input= array_filter(Input::all());
        $input['birth_date'] = date('Y-m-d', strtotime($request->birth_date));

        if(Input::hasFile('image'))
        {
        $image = public_path().'/'.env('USER_IMAGE_PATH').$follower->image;
        if (file_exists($image)) { 
            unlink($image);
        }
        $image = Common::uploadImage($input['image'],env('USER_IMAGE_PATH'));
        $input['image'] = $image;
   
        }
        if (empty($request->get('password'))){

            $follower->update($input, $request->except('password'));
        }else{
            
            $input['password'] = bcrypt($request->password);

            $follower->update($input);

        }
        return $input;
    }





  

 

}
