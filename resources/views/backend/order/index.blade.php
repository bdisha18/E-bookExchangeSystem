
@extends('backend.layouts.master')
@section('content')
<!-- /.row -->

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Order Details
                        </h4>


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
                          <a href="{{route('publisher.create')}}">
                            <button class="btn btn-success" style="float: right;"> <i class="fa fa-plus"></i> Add New Publisher</button>
                          </a>
                          <form action="{{route('order.index')}}" method="get">
                            <input name="search" type="text" placeholder="Search.." >                   
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($orders))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>User Name</th>
                                          <th>Email</th>
                                          <th>Status</th>
                                          <th>Order Placed</th>
                                          <th>Total Amount</th>
                                          <th>Reference Id</th>
                                          <th>Payment Method</th>
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
                                        <td>{{ucwords($order->username)}}</td>
                                        <td>{{$order->email}}</td>
                                        <td>{{$order->status}}</td>
                                         <td>{{$order->created_at}}</td>
                                          <td>{{$order->total_amount}}</td>
                                        <td>{{$order->reference_id}}</td>
                                         <td>{{$order->payment_method}}</td>

 
                                        <td> 
                                              {!! Form::open(['method'=>'DELETE', 'route'=>['publisher.delete',
                                                      $publisher->offer_id]]) !!}
                                              <a href="{{ route('order.view',$order->id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                                      
                                               <a href="{{ route('order.edit',$order->id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                                               <button  title="Delete" type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this user?');"><span class="mdi mdi-delete"></span></button>
                                               {!! Form::close() !!}
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