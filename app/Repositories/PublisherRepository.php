<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
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

        if($request->image){
        $image = Common::uploadImage($request->image,env('USER_IMAGE_PATH'));
        $input['image'] = $image;
        }
        Publisher::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $publisher = Publisher::findOrFail($id);
        $input= array_filter(Input::all());

        if(Input::hasFile('image'))
        {
        $image = public_path().'/'.env('PUBLISHER_IMAGE_PATH').$publisher->image;
        if (file_exists($image)) { 
            unlink($image);
        }
        $image = Common::uploadImage($input['image'],env('Publisher_IMAGE_PATH'));
        $input['image'] = $image;
   
        }
        $publisher->update($input);

        }
        return $input;
    }





  

 

}
