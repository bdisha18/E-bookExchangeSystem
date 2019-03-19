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
                ['offer_titlr', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('offer_id', 'desc')->paginate(10);
        }else{
            $offer = Offers::orderBy('offer_id', 'desc')->paginate(10);
        }
            return $offer;
    }

    public function store($request) {
         $input= array_filter(Input::all());
        Offers::create($input);
        return true;
    
        }


    public function update($request, $id) {
    
        $offer = Offers::findOrFail($id);
        $data = $request->all();
        $offer->update($data);
        return true;
    }
    
}
