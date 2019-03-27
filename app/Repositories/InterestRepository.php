<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Model\Interest;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;


class InterestRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Interest";
    }

    public function index($request) {
        
        if($request->search){
            $interest = Interest::where([ 
                ['name', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('interest_id', 'desc')->paginate(10);
        }else{
            $interest = Interest::orderBy('interest_id', 'desc')->paginate(10);
        }
            return $interest;
    }

    public function store($request) {
        $input= array_filter(Input::all());

        if($request->image){
        $image = Common::uploadImage($request->image,env('INTEREST_IMAGE_PATH'));
        $input['image'] = $image;
        }
        Interest::create($input);
        return true;
    }


    public function update($request, $id) {
    
        $interest = Interest::findOrFail($id);
        $input= array_filter(Input::all());

        if(Input::hasFile('image'))
        {
            $image = public_path().'/'.env('INTEREST_IMAGE_PATH').$interest->image;
                if (file_exists($image)) { 
                    unlink($image);
                }
            $image = Common::uploadImage($input['image'],env('INTEREST_IMAGE_PATH'));
            $input['image'] = $image;
   
        }
        $interest->update($input);
         return $input;
    }
}
