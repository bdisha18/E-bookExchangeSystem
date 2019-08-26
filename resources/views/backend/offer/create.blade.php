@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="icon-placeholder mdi mdi-gift"></i></span> Create Offer
                     
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-lg-12">

                    <!--widget card begin-->
                    <form role="form" action="{{ route('offer.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card m-b-30">
                        <div class="card-header">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Offer Title</label>
                                    <input type="text" name="offer_title" class="form-control" placeholder="Enter Offer Title">
                                    <div class="text-danger">{{ $errors->first('offer_title') }}</div>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label>Discount</label>
                                    <input type="text" name="discount_amount" class="form-control" placeholder="Enter Discount Amount">
                                    <div class="text-danger">{{ $errors->first('discount_amount') }}</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Category</label>
                                    <input type="text" name="category_id" class="form-control" placeholder="Enter Category">
                                    <div class="text-danger">{{ $errors->first('category_id') }}</div>
                                </div>
                                   <div class="form-group col-md-6">
                                    <label>Start Date</label>
                                    <input type="date" name="start_date" class="form-control" placeholder="start date">
                                    <div class="text-danger">{{ $errors->first('start_date') }}</div>
                                </div>
                                  
                                  <div class="form-group col-md-6">
                                    <label>End Date</label>
                                    <input type="date" name="end_date" class="form-control" placeholder="end date">
                                    <div class="text-danger">{{ $errors->first('end_date') }}</div>
                                </div>
                                  <div class="form-group col-md-6">
                                    <label>Status</label>
                                    <select name="status" class="form-control" id="" placeholder="enter status">
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Inactive</option></select>
                                    <div class="text-danger">{{ $errors->first('status') }}</div>
                                    </div>
                                     <div class="form-group col-md-6">
                                      <div>Image</div>
                                      <div class="upload-btn-wrapper">
                                        <button class="upload-btn">Upload a file</button>
                                        <input type="file" name="offer_image" />
                                      </div>
                                      <div class="text-danger">{{ $errors->first('offer_image') }}</div>
                                  </div>
                                    <div class="form-group col-md-12">
                                    <label>Offer Description</label>
                                    <textarea type="text" name="offer_description" class="form-control" placeholder="Enter Offer Description"></textarea>
                                    <div class="text-danger">{{ $errors->first('offer_description') }}</div>
                                </div>
                                  <div class="form-group col-md-12">
                                    <label>Terms&conditions</label>
                                    <textarea name="termsconditions" class="form-control ckeditor" 
                                              placeholder="    Write  terms & conditions here"></textarea>
                                    <div class="text-danger">{{ $errors->first('termsconditions') }}</div>
                                </div>
                            </div>
                          </div>
                      </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('offer.index')}}" class="button
                            btn btn-danger">Back</a>
                        </div>
                        </form>
                        
                      </div>
                    </div>
                  </div>
@endsection