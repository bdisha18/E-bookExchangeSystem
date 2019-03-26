@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Create Email
                     
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('email.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Sent to</label>
                                    <input type="text" name="email_name" class="form-control" placeholder="Enter Email id">
                                    <div class="text-danger">{{ $errors->first('email_name') }}</div>
                                </div>
                               <div class="form-group col-md-4">
                                    <label>First Name</label>
                                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                                    <div class="text-danger">{{ $errors->first('fname') }}</div>
                                </div> 
                                  <div class="form-group col-md-4">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                                    <div class="text-danger">{{ $errors->first('lname') }}</div>
                                </div>
                                   <div class="form-group col-md-4">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="enter subject of the email">
                                    <div class="text-danger">{{ $errors->first('subject') }}</div>
                                </div>
                                  <div class="form-group col-md-4">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="" placeholder="enter status">
                                                        <option>Select</option>
                                                        <option>Send</option>
                                                        <option>Declined</option></select>
                                    <div class="text-danger">{{ $errors->first('status') }}</div>
                                    </div>
                                  <div class="form-group col-md-4">
                                    <label>Message</label>
                                    <textarea class="form-control" name="message" rows="7" cols="25" class="message" id=""
                                              placeholder="Write message here"></textarea>
                                    <div class="text-danger">{{ $errors->first('message') }}</div>
                                </div>
                         </div>
                          </div>
                      </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('email.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection