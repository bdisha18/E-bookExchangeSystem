
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Member;
use App\Model\Transaction;
@endphp

<!-- /.row -->

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="icon-placeholder mdi mdi-webpack "></i></span> Order
                        </h4>
                        <div class="form-dark">
                            <div class="input-group input-group-flush mb-3">
                              <form action="{{route('order.index')}}" method="get">
                                <input placeholder="Search Orders" type="search" name="search" 
                                       class="form-control form-control-lg search form-control-prepended">
                              </form>
                              <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="mdi mdi-magnify"></i>
                                    </div>
                              </div>  
                            </div>
                        </div>

                    </div>
                </div>
                <a href="index.blade.php"></a>
            </div>
        </div>

        <div class="container pull-up">
            <div class="row">

                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                          
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($orders))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Username</th>
                                          <th>Email</th>
                                         <th>Total Amount</th>
                                          <th>Reference Id</th>
                                          <th>Payment Method</th>
                                           <th>Status</th>
                                            <th>Order Placed</th>
                                           <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($orders as $order)
                                      <tr>
                                        <td>{{$i++}}</td>
                                       <td>{{ucwords(Member::where('user_id', $order->user_id)->value('fname'))}} 
                                            {{ucwords(Member::where('user_id', $order->user_id)->value('lname'))}}</td>
           <td>{{Member::where('user_id', $order->user_id)->value('email')}}</td>
                             
                                      
                                         
                                          <td>{{Transaction::where('transaction_id',$order->transaction_id)->value('amount')}}</td>
                                          <td>{{Transaction::where('transaction_id',$order->transaction_id)->value('reference_id')}}</td>
                                          <td>{{Transaction::where('transaction_id',$order->transaction_id)->value('payment_method')}}</td>
                                          <td>{{$order->status}}</td>
                                          <td>{{$order->created_at}}</td>

 
                                        <td> 
                                              <a href="{{ route('order.detail',$order->order_id) }}"><button type="button" title="order detail" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                                      
                                               <a href="{{ route('order.edit',$order->order_id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Order Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection