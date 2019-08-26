
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
                                <i class="mdi mdi-eye "></i></span> Email Details
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">User Id :</label>
                                    <p>{{$email->user_id}}</p>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Sent to :</label>
                                    <p>{{$email->email_name}}</p> 
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Username :</label>
                                    <p>{{Member::where('user_id',$email->user_id)->value('fname')}} {{Member::where('user_id',$email->user_id)->value('lname')}}</p>
                                 
                                </div>
                            </div>


                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Subject :</label>
                                    <p>{{$email->subject}}</p> 
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Message:</label>
                                    <p>{{$email->message}}</p> 
                                </div>
                            </div>
                     <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Created at :</label>
                                    <p>{{$email->created_at}}</p> 
                                </div>
                            </div>
                               
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Status :</label>
                                    <p>{{$email->status}}</p> 
                                </div>
                            </div>
                             </div>
                    </form>
                  </div>
                </div>
        </div>
    <a href="{{route('email.index')}}" class="button btn btn-danger">Back</a>
    </div>
</div>
</section>
@endsection