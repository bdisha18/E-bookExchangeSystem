
@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span>Testimonial Details
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
                                    <label class="label">Testimonial Id :</label>
                                    <p>{{$testimonial->id}}</p>
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Image :</label>
                                    <p>{{$testimonial->image}}</p> 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Author Name :</label>
                                    <p>{{$testimonial->author_name}}</p> 
                                </div>
                            </div>


                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Released Date :</label>
                                    <p>{{$testimonial->created_at}}</p> 
                                </div>
                            </div>
                                   <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Description :</label>
                                    <p>{{$testimonial->description}}</p> 
                                </div>
                            </div>
                             </div>
                    </form>
                  </div>
                </div>
        </div>
    </div>
    <a href="{{route('testimonial.index')}}" class="button btn btn-danger">Back</a>
</div>
</section>
@endsection