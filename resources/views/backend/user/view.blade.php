
@extends('backend.layouts.master')
@section('content')

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
                                    <label class="label">Bio :</label>
                                    <p>{{$user->bio}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Gender :</label>
                                    <p>{{$user->gender}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">City :</label>
                                    <p>{{$user->city}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Country :</label>
                                    <p>{{$user->country}}</p> 
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

                            
                        </div>
                    </form>
                  </div>
                </div>
        </div>
    </div>
    <button type="button" class="btn m-b-15 ml-2 mr-2 btn-danger"><a href="{{route('user.index')}}"> Back</a></button>
</div>
</section>
@endsection