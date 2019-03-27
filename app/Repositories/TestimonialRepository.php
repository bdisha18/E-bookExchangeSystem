<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Illuminate\Support\Facades\Auth;
use App\Model\Testimonial;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;

class TestimonialRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Testimonial";
    }

    public function index($request) {
        if($request->search){
            $testimonial = Testimonial::where([
                ['author_name', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('id', 'desc')->paginate(10);
        }else{
            $testimonial = Testimonial::orderBy('id', 'desc')->paginate(10);
        }
         
            return $testimonial;
    }

    public function store($request) {
        $input= array_filter(Input::all());
         if($request->image){
        $image = Common::uploadImage($request->image,env('USER_IMAGE_PATH'));
        $input['image'] = $image;
        }
        Testimonial::create($input);
       
        return true;
    }


    public function update($request, $id) {
    
        $testimonial = Testimonial::findOrFail($id);
        $input= array_filter(Input::all());

        if(Input::hasFile('image'))
        {
            $image = public_path().'/'.env('Book_IMAGE_PATH').$book->image;
                if (file_exists($image)) { 
                    unlink($image);
                }
            $image = Common::uploadImage($input['image'],env('Book_IMAGE_PATH'));
            $input['image'] = $image;
   
        }
        $testimonial->update($input);
        return $input;
    }
}
