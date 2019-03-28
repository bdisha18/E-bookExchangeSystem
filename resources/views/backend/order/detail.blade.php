
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Productdetail;

@endphp



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
                                    <label class="label">Book Id :</label>
                                    <p>{{Productdetail::where('order_id',$order->order_id)->value('book_id')}}</p>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Book Name :</label>
                                    <p>{{Productdetail::where('order_id',$order->order_id)->value('book_id')}}</p>
                                </div>
                            </div>

                                  
                             </div>
                    </form>
                  </div>
                </div>
        </div>
    </div>
    <a href="{{route('order.view')}}" class="button btn btn-danger">Back</a>
</div>
</section>
@endsection