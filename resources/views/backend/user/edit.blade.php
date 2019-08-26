@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Edit Users
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('user.update',$user->user_id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input type="text" name="fname" class="form-control" value="{{$user->fname}}" placeholder="Email">
                                    <div class="text-danger">{{ $errors->first('fname') }}</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" class="form-control" value="{{$user->lname}}" placeholder="Last Name">
                                    <div class="text-danger">{{ $errors->first('lname') }}</div>
                                </div>
                                
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$user->email}}" placeholder="Email">
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Contact No</label>
                                    <input type="text" name="contactno" class="form-control" value="{{$user->contactno}}" placeholder="Contact No">
                                    <div class="text-danger">{{ $errors->first('contactno') }}</div>
                                </div>
                                
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>New Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="New Password">
                                    <div class="text-danger">{{ $errors->first('password') }}</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password">
                                    <div class="text-danger">{{ $errors->first('confirm-password') }}</div>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Birth Date</label>
                                    <input type="text" name="dob" class="js-datepicker form-control" value="{{$user->dob}}" placeholder="Select a Date">
                                </div>
                                <div class="form-group col-md-6">
                                  <label>Status</label><br>
                                    <label class="radio-inline">Active
                                      </label>
                                      <input class="col-md-2" type="radio" name="status" value="active" {{($user->status == 'active')? 'checked' : ''}}>
                                      <label class="radio-inline">Deactivate</label>
                                      <input class="col-md-2" type="radio" name="status" value="inactive" {{($user->status == 'inactive')? 'checked' : ''}}>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                      <div>Select Image</div>
                                      <div class="upload-btn-wrapper">
                                        <button class="upload-btn">Upload a file</button>
                                        <input type="file" name="image" value="{{$user->image}}" />
                                      </div>
                                      <div class="text-danger">{{ $errors->first('image') }}</div>
                                </div>
                              
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('user.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection