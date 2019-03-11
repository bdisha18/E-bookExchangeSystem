
@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Follower Details
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
                                    <p>{{$follower->id}}</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Name :</label>
                                    <p>{{$follower->fname}} {{$follower->lname}}</p>
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Email :</label>
                                    <p>{{$follower->email}}</p> 
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Username :</label>
                                    <p>{{$follower->username}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Contact No :</label>
                                    <p>{{$follower->contactno}}</p> 
                                </div>
                            </div>


                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Bio :</label>
                                    <p>{{$follower->bio}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Gender :</label>
                                    <p>{{$follower->gender}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">City :</label>
                                    <p>{{$follower->city}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Country :</label>
                                    <p>{{$follower->country}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Birth Date :</label>
                                    <p>{{$follower->birth_date}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Gmail Link :</label>
                                    <p>{{$follower->gmail_link}}</p> 
                                </div>
                            </div>

                            
                        </div>
                    </form>
                  </div>
                </div>
        </div>
    </div>
    <a href="{{route('follower.index')}}" class="button btn btn-danger">Back</a>
</div>
</section>
@endsection