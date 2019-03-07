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

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="{{$user->fname}}" placeholder="Email">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" value="{{$user->lname}}" placeholder="Last Name">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="{{$user->lname}}" placeholder="Last Name">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="{{$user->email}}" placeholder="Email">
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Contact No</label>
                                    <input type="text" class="form-control" value="{{$user->contactno}}" placeholder="COntact No">
                                    <div class="text-danger">{{ $errors->first('contactno') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="{{$user->lname}}" placeholder="Last Name">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" value="{{$user->fname}}" placeholder="Email">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" value="{{$user->lname}}" placeholder="Last Name">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Username</label>
                                    <input type="text" class="form-control" value="{{$user->lname}}" placeholder="Last Name">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                              </div>
                                
                        </div>
                    </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
@endsection