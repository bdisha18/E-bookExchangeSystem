<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Cart;
use App\Http\Controllers\Controller;
use App\Repositories\CartRepository;

class CartController extends Controller
{
    
    protected $cartRepository;

    public function __construct(CartRepository $cartRepository) {
        $this->cartRepository = $cartRepository;
    }

  
    public function index(Request $request) {   

      $carts = $this->cartRepository->index($request);
        return view('backend.cart.index', compact('carts'));
    }

    public function view($id)
    {
        $cart = $this->cartRepository->find($id);
        return view('backend.cart.view', compact('cart'));
    }
    
    public function edit($id) {
        $carts = Cart::all();
        $cart = $this->cartRepository->find($id);
        return view('backend.cart.edit', compact('cart', 'carts'));
    }

   
    public function update(Request $request, $id){
        //  $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required',
        //     'password'=>'confirmed',
        //     'password_confirmation'=>'sometimes|required_with:password'
        // ]);
        $this->cartRepository->update($request, $id);
        return redirect()->route('cart.index')->with('status', 'Updated Successfully.');
    }

    public function delete($id) {
        $this->cartRepository->delete($id);
        return back()->with('status', 'Deleted Successfuly.');
    }
 
}
