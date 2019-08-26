
@extends('backend.layouts.master')
@section('content')
<?php
use App\Model\Member;
?>

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-eye "></i></span> Published Documents Details
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
                                    <label class="label">Publisher  Name :</label>
                                    @if($publisher->user_id)
                                        <p>{{ucwords(Member::where('user_id', $publisher->user_id)->value('fname'))}} {{ucwords(Member::where('user_id', $publisher->user_id)->value('lname'))}}</p>
                                        @else
                                        <p>admin</p>
                                        @endif
                                     
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Title :</label>
                                    <p>{{$publisher->title}}</p> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">File Name :</label>
                                    <p>{{$publisher->file}}</p> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Status :</label>
                                    <p>{{$publisher->status}}</p> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">description :</label>
                                    <p>{{$publisher->description}}</p>
                        </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
        </div>
    <a href="{{route('publisher.index')}}" class="button btn btn-danger">Back</a>
</div>
</div>
</section>
@endsection