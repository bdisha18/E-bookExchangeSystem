<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Illuminate\Support\Facades\Auth;
use App\Model\Publisher;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class PublisherRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Publisher";
    }

    public function index($request) {
        
        if($request->search){
            $publisher = Publisher::where([ 
                ['publisher_name', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('publisher_id', 'desc')->paginate(10);
        }else{
            $publisher = Publisher::orderBy('publisher_id', 'desc')->paginate(10);
        }
            return $publisher;
    }

    public function store($request) {
        $input= array_filter(Input::all());
        $input['user_id'] = Auth::id();
        
        Publisher::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $publisher = Publisher::findOrFail($id);
        $data = $request->all();
        $publisher->update($data);
        return true;
    }
}
