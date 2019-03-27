
@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span>Order Details
                        </h4>


                    </div>
                </div>
            </div>
        </div>

        <div class="container pull-up">
            <div class="row">

                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-header">
                        <form role="form">
                    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Order Id :</label>
                                    <p>{{$order->order_id}}</p>
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Username :</label>
                                    <p>{{$order->username}}</p> 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Email :</label>
                                    <p>{{$order->email}}</p> 
                                </div>
                            </div>


                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Status :</label>
                                    <p>{{$order->status}}</p> 
                                </div>
                            </div>
                                   <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Order Placed :</label>
                                    <p>{{$order->created_at}}</p> 
                                </div>
                            </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Total Amount:</label>
                                    <p>{{$order->created_at}}</p> 
                                </div>
                            </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Reference Id  :</label>
                                    <p>{{$order->reference_id}}</p> 
                                </div>
                            </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Payment Method:</label>
                                    <p>{{$order->payment_method}}</p> 
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Address:</label>
                                    <p>{{$order->payment_method}}</p> 
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Contact Number :</label>
                                    <p>{{$order->contactno}}</p> 
                                    </div>
                            </div>
                             
                             
                             </div>
                    </form>
                  </div>
                </div>
        </div>
    </div>
    <a href="{{route('testimonial.index')}}" class="button btn btn-danger">Back</a>
</div>
</section>
@endsection