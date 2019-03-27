<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Illuminate\Support\Facades\Auth;
use App\Model\Address;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;

class AddressRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Address";
    }

    public function index($request) {
        
        if($request->search){
            $address = Address::where([ 
                ['address', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('id', 'desc')->paginate(10);
        }else{
            $address = Address::orderBy('id', 'desc')->paginate(10);
        }
            return $address;
    }

    public function store($request) {
        $input= array_filter(Input::all());
        $input['user_id'] = Auth::id();
        
        Address::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $address = Address::findOrFail($id);
        $data = $request->all();
        $address->update($data);
        return true;
    }
}
