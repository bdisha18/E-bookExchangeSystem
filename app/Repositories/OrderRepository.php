<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Illuminate\Support\Facades\Auth;
use App\Model\Order;
use App\Helper\Common;
use Illuminate\Support\Facades\Input;

class OrderRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
   public function model() {
        return "App\Model\Order";
    }

    public function index($request) {
        if($request->search){
            $order = Order::where([
                ['username', 'LIKE', '%' . $request->search . '%'],
                ])->orderBy('order_id', 'desc')->paginate(10);
        }else{
            
            $order= Order::orderBy('order_id', 'desc')->paginate(10);
        }
         
            return $order;
    }

    public function store($request) {
        $input= array_filter(Input::all());
         $order = Order::create($input);
        return $order;
    
    }


    public function update($request, $id) {
    
        $order = Order::findOrFail($id);
        $input= array_filter(Input::all());

        $order->update($input);
        return $order;
    }
    
    public function detail()
    {
        $order = Productdetail::where('order_id',$order->order_id)->value('book_id')->get();
        $order = Book::where('book_id',$order->book_id)->value('book_name')->get();
        return view('order.detail',compact('order'));
    }
}
