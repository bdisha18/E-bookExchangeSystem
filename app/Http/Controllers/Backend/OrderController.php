<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Model\Order;
use App\Model\Productdetail;
use App\Model\Book;
use App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;


class OrderController extends Controller
{
    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository) {
        $this->orderRepository = $orderRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = $this->orderRepository->index($request);
        return view('backend.order.index', compact('orders'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('backend.order.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->orderRepository->store($request);
        return redirect()->route('order.index')->with('status', 'Transaction Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $order = $this->orderRepository->find($id);
        return view('backend.order.view', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Order::all();
        $order = $this->orderRepository->find($id);
        return view('backend.order.edit', compact('order', 'orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->orderRepository->update($request, $id);
        return redirect()->route('order.index')->with('status', 'Updated Successfully.');
    }
    
     public function detail($id)
    {
        $orders = Order::findOrFail($id);
        $order_detail = Productdetail::where('order_id', $id)->get();
//        dd($order_detail);
        $books = Book::where(['book_id' => $order_detail->book_id])->get();
        dd($books);
        
        return view('backend.order.detail',compact('orders', 'books'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
