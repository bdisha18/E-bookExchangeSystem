<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\Model\Member;
use App\Model\CardDetail;
use App\Http\Controllers\Controller;

class CardController extends Controller
{

    public function index(){
         $cards = CardDetail::where('user_id', Auth::guard('member')->user()->user_id)->get();
        return view('frontend.card.index', compact('cards'));
    }

    public function store(Request $request){
       
        $data = $request->all();
        $data['user_id'] = Auth::guard('member')->user()->user_id;
        CardDetail::create($data);
        return redirect()->route('card.index');
    }

    public function update(Request $request, $id){
        $data = $request->all();
        $cards = CardDetail::where('card_id', $id)->first();
        $cards->update($data);
        return redirect()->route('card.index');
    }


    public function delete($id){
        $card = CardDetail::where('id', $id)->first();
        $card->delete();
        return back()->with('status', 'Deleted Successfuly.');
    }

}
