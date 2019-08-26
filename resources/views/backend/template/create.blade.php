@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                        <i class="icon-placeholder mdi mdi-mailbox-open-outline"></i></span> Create Email Templates
                     
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('template.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email Title</label>
                                    <input type="text" name="email_name" class="form-control" placeholder="Enter Email Title">
                                    <div class="text-danger">{{ $errors->first('email_name') }}</div>
                                </div>
                                   <div class="form-group col-md-6">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="enter subject of the email">
                                    <div class="text-danger">{{ $errors->first('subject') }}</div>
                                </div>
                                  <div class="form-group col-md-12">
                                    <label>Message</label>
                                    <textarea class="form-control ckeditor" name="message" class="message" placeholder="Write message here"></textarea>
                                    <div class="text-danger">{{ $errors->first('message') }}</div>
                                </div>
                         </div>
                          </div>
                      </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('template.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection