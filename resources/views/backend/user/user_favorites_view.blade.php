
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Publisher;
use App\Model\Rating;
@endphp

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Favorite Details
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
                                    <label class="label">Book Id :</label>
                                    <p>{{$book[0]->book_id}}</p>
                                </div>
                            </div>

                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Book Name :</label>
                                    <p>{{$book[0]->book_name}}</p> 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Author Name :</label>
                                    <p>{{$book[0]->author_name}}</p> 
                                </div>
                            </div>


                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Book Image :</label>
                                    <p>{{$book[0]->book_image}}</p> 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Rating :</label>
                                    <p>{{Rating::where('book_id',$book[0]->book_id)->value('rating')}}</p> 
                                </div>
                            </div>
                     <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Released Date :</label>
                                    <p>{{$book[0]->created_at}}</p> 
                                </div>
                            </div>
                               <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Book Price :</label>
                                    <p>{{$book[0]->book_price}}</p> 
                                </div>
                            </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Status :</label>
                                    <p>{{$book[0]->status}}</p> 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Type :</label>
                                    <p>{{$book[0]->category}}</p> 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Publisher Name :</label>
                            <p>{{Publisher::where('book_id', $book[0]->book_id)->value('publisher_name')}}</p>

                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Description :</label>
                                    <p>{{$book[0]->description}}</p> 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Number of Pages :</label>
                                    <p>{{$book[0]->pages}}</p> 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Books Available :</label>
                                    <p>{{$book[0]->book_available}}</p> 
                                </div>
                            </div>
                             <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Uploaded File :</label>
                                    <p>{{$book[0]->file}}</p> 
                                </div>
                            </div>
                            </div>
                    </form>
                      </div>
                </div>

             <a href="{{route('user.favorite',$book[0]->book_id)}}" class="button btn btn-danger">Ba
                 
                 ck</a>

        </div>
    </div>
</div>
</section>
@endsection