
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Member;
@endphp
<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Address Details
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
                                    <label class="label">Username :</label>
                                    <p>{{ucwords(Member::where('user_id', $address->user_id)->value('fname'))}} {{ucwords(Member::where('user_id', $address->user_id)->value('lname'))}}</p> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Email :</label>
                                    <p>{{ucwords(Member::where('user_id', $address->user_id)->value('email'))}}</p> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">City :</label>
                                    <p>{{$address->city}}</p> 
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">State :</label>
                                    <p>{{$address->state}}</p> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Country :</label>
                                    <p>{{$address->country}}</p> 
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="label">Address :</label>
                                    <p>{{$address->address}}</p> 
                                </div>
                            </div>
                               
                             </div>
                    </form>
                  </div>
                </div>
        </div>
    </div>
    <a href="{{route('address.index')}}" class="button btn btn-danger">Back</a>
</div>
</section>
@endsection