@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span>Edit Admin
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('admin.update',$admin->admin_id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" value="{{$admin->name}}" placeholder="Name">
                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$admin->email}}" placeholder="Email">
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                </div>
                                
                                <div class="form-group col-md-4">
                                  <label>Status</label><br>
                                    <label class="radio-inline">Active
                                      </label>
                                      <input class="col-md-2" type="radio" name="status" value="active" {{($admin->status == 'active')? 'checked' : ''}}>
                                      <label class="radio-inline">Deactivate</label>
                                      <input class="col-md-2" type="radio" name="status" value="inactive" {{($admin->status == 'inactive')? 'checked' : ''}}>
                                </div>
                              </div>

                              <div class="form-row">
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
                                <div class="form-group col-md-4">
                                      <label>Select Image</label>
                                      <input type="file" name="image" class="form-control">
                                      <div class="text-danger">{{ $errors->first('image') }}</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('admin.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection