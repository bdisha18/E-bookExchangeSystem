<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Model\Member;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository {

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
            $user = Member::where([ 
                ['fname', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('id', 'desc')->paginate(10);
        }else{
            $user = Member::orderBy('id', 'desc')->paginate(10);
        }
            return $user;
    }

    public function store($request) {
        $input= array_filter(Input::all());
        if(isset($input['password'])) {
            $input['password'] = bcrypt($input['password']);
        }
        Member::create($input);
        return true;
    }





  

 

}
