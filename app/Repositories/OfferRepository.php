<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Model\Offers;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class OfferRepository extends BaseRepository
{
    public function model() {
        return "App\Model\Offers";
    }

    public function index($request) {
        
        if($request->search){
            $offer = Offers::where([ 
                ['offer_title', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('offer_id', 'desc')->paginate(10);
        }else{
            $offer = Offers::orderBy('offer_id', 'desc')->paginate(10);
        }
            return $offer;
    }

    public function store($request) {
        $input= array_filter(Input::all());
         // $input['category_id'] = '';
        if($request->offer_image){
        $image = Common::uploadImage($request->offer_image,env('OFFER_IMAGE_PATH'));
        $input['offer_image'] = $image;
        }
         $input['book_id'] = null;
         Offers::create($input);
        return true;
    
        }


    public function update($request, $id) {
    
        $offer = Offers::findOrFail($id);
        $input= array_filter(Input::all());
        if(Input::hasFile('offer_image'))
        {
        $image = public_path().'/'.env('OFFER_IMAGE_PATH').$offer->offer_image;
        if (file_exists($image) && $offer->offer_image) { 
            unlink($image);
        }
        $image = Common::uploadImage($input['offer_image'],env('OFFER_IMAGE_PATH'));
        $input['offer_image'] = $image;
   
        }
        $offer->update($input);
        return true;
    }
    
}
