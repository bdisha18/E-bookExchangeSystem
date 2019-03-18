
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Interest;
@endphp

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> User Details
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
                                    <label class="label">User Id :</label>
                                    <p>{{$user->id}}</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Name :</label>
                                    <p>{{$user->fname}} {{$user->lname}}</p>
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Email :</label>
                                    <p>{{$user->email}}</p> 
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Username :</label>
                                    <p>{{$user->username}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Contact No :</label>
                                    <p>{{$user->contactno}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Birth Date :</label>
                                    <p>{{$user->birth_date}}</p> 
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Gmail Link :</label>
                                    <p>{{$user->gmail_link}}</p> 
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Facebook Link :</label>
                                    <p>{{$user->facebook_link}}</p> 
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Interests :</label>
                                    <ul>
                                        <li>{{Interest::where('user_id', $user->user_id)->value('name')}}</li>
                                    </ul> 
                                </div>
                            </div>

                            
                        </div>
                    </form>
                  </div>
                </div>
        </div>
    </div>
    <a href="{{route('user.index')}}" class="button btn btn-danger">Back</a>
</div>
</section>
@endsection