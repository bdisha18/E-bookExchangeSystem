
@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Publisher Details
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
                                    <p>{{$publisher->user_id}}</p>
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Publisher  Name :</label>
                                    <p>{{$publisher->publisher_name}}</p> 
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">No. of Books Published :</label>
                                    <p>{{$publisher->books_published}}</p> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Publish Books Name :</label>
                                    <p>{{$publisher->publish_bookname}}</p> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Book Category :</label>
                                    <p>{{$publisher->book_category}}</p> 
                                </div>
                            </div>
      
                        </div>
                    </form>
                  </div>
                </div>
        </div>
    </div>
    <a href="{{route('publisher.index')}}" class="button btn btn-danger">Back</a>
</div>
</section>
@endsection