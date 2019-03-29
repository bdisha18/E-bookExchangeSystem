
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Book;
@endphp
<!-- /.row -->

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Cart Detail
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
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Total Products :</label>
                                </div>
                            </div>
                             <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label">Total Costs:</label>
                                </div>
                            </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                
                          </div>
                            
                        </div>
                      </div>
                                
                                </section>

            <div class="row">

                <div class="col-md-11">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="label">Image :</label>
                                </div>
                            </div>
                             <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label">Book Id:</label>
                                </div>
                                <div class="form-group">
                                    <label class="label">{{Book::where('book_id',$cart->book_id)->value('book_name')}}</label>
                                </div>
                                

                            </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                
                          </div>
                            
                        </div>
                      </div>

                  @endsection