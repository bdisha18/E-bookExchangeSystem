
@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-eye "></i></span> Contact Details
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Name :</label>
                                    <p>{{$contact->name}}</p>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Email Id :</label>
                                    <p>{{$contact->email}}</p> 
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Message :</label>
                                    <p>{{$contact->message}}</p>
                                 
                                </div>
                            </div>
                             </div>
                    </form>
                  </div>
                </div>
        </div>
    <a href="{{route('contact.index')}}" class="button btn btn-danger">Back</a>
    </div>
</div>
</section>
@endsection