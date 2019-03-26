
@extends('backend.layouts.master')
@section('content')
<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Email Template Details
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
                                    <label class="label">Email Title :</label>
                                    <p>{{$template->email_name}}</p> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Subject :</label>
                                    <p>{{$template->subject}}</p> 
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Created at :</label>
                                    <p>{{$template->created_at}}</p> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label">Message :</label>
                                    <p>{{$template->message}}</p> 
                                </div>
                            </div>
                               
                             </div>
                    </form>
                  </div>
                </div>
        </div>
    </div>
    <a href="{{route('template.index')}}" class="button btn btn-danger">Back</a>
</div>
</section>
@endsection