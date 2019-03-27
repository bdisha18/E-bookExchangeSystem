<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Model\Cart;
use Illuminate\Support\Facades\Input;


class CartRepository extends BaseRepository
{
    public function model() {
        return "App\Model\Cart";
    }

    public function index($request) {
        
        if($request->search){
            $cart = Cart::where([ 
                ['user_id', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('cart_id', 'desc')->paginate(10);
        }else{
            $cart = Cart::orderBy('cart_id', 'desc')->paginate(10);
        }
            return $cart;
    }

    public function update($request, $id) {
    
        $cart = Cart::findOrFail($id);
        $data = $request->all();
        $cart->update($data);
        return true;
    }
    
}
