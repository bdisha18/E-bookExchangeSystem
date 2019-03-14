@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Edit Follower Details
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('follower.update',$follower->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>First Name</label>
                                    <input type="text" name="fname" class="form-control" value="{{$follower->fname}}" placeholder="First Name">
                                    <div class="text-danger">{{ $errors->first('fname') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" class="form-control" value="{{$follower->lname}}" placeholder="Last Name">
                                    <div class="text-danger">{{ $errors->first('lname') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" value="{{$follower->lname}}" placeholder="Last Name">
                                    <div class="text-danger">{{ $errors->first('username') }}</div>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$follower->email}}" placeholder="Email">
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Contact No</label>
                                    <input type="text" name="contactno" class="form-control" value="{{$follower->contactno}}" placeholder="Contact No">
                                    <div class="text-danger">{{ $errors->first('contactno') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>City</label>
                                    <select class="form-control js-select2">
                                    <option>city</option>
                                </select>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Country</label>
                                    <select class="form-control js-select2">
                                    <option>country</option>
                                </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Birth Date</label>
                                    <input type="text" name="birth_date" class="js-datepicker form-control" value="{{$follower->birth_date}}" placeholder="Select a Date">
                                </div>
                                <div class="form-group col-md-4">
                                  <label>Status</label><br>
                                    <label class="radio-inline">Activate
                                      </label>
                                      <input class="col-md-2" type="radio" name="status" value="active" {{($follower->status == 'activate')? 'checked' : ''}}>
                                      <label class="radio-inline">Deactivate</label>
                                      <input class="col-md-2" type="radio" name="status" value="active" {{($follower->status == 'deactivate')? 'checked' : ''}}>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                  <label>Gender</label><br>
                                    <label class="radio-inline">Male
                                      </label>
                                      <input class="col-md-2" type="radio" name="gender" value="active" {{($follower->status == 'male')? 'checked' : ''}}>
                                      <label class="radio-inline">Female</label>
                                      <input class="col-md-2" type="radio" name="gender" value="active" {{($follower->status == 'female')? 'checked' : ''}}>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>New Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="New Password">
                                    <div class="text-danger">{{ $errors->first('password') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password">
                                    <div class="text-danger">{{ $errors->first('confirm-password') }}</div>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                      <label>Select Image</label>
                                      <input type="file" name="image" class="form-control" placeholder="Image" value="{{$follower->image}}">
                                      <div class="text-danger">{{ $errors->first('image') }}</div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Bio</label>
                                    <textarea type="text" name="bio" class="form-control" value="{{$follower->bio}}" placeholder="Bio" cols="40"></textarea>
                                    <div class="text-danger">{{ $errors->first('bio') }}</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('follower.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection