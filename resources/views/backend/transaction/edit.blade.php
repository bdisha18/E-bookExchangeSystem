
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Member;
use App\Model\Offers;
@endphp

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-launch "></i></span> Edit Transaction
                        </h4>


                    </div>
                </div>
            </div>
        </div>

        <div class="container pull-up">
            <div class="row">

                <div class="col-md-12">
                    <form role="form" action="{{ route('transaction.update',$transaction->transaction_id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card m-b-30">
                        <div class="card-header">
                        <form role="form">
                    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">UserName :</label>
                                    <p>{{Member::where('user_id', $transaction->user_id)->value('username')}}</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Email :</label>
                                    <p>{{Member::where('user_id', $transaction->user_id)->value('email')}}</p> 
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Reference Id :</label>
                                    <p>{{$transaction->reference_id}}</p> 
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Email :</label>
                                    <p>{{Member::where('user_id', $transaction->user_id)->value('email')}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Payment Method :</label>
                                    <p>{{$transaction->payment_method}}</p> 
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Status :</label>
                                    <select name="status" class="form-control">
                                        <option>Paid</option>
                                        <option>Pending</option>
                                        <option>Declined</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Amount :</label>
                                    <p>{{$transaction->amount}}</p> 
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Cashback :</label>
                                    <p>{{$transaction->total_cashback}}</p> 
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Discount :</label>
                                    <p>{{$transaction->discount}}</p> 
                                </div>
                            </div>
                        </div>
                  </div>
                </div>
        
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('transaction.index')}}" class="button btn btn-danger">Back</a>
    </div>
</form>
</div>
</div>
</div>
</section>
@endsection