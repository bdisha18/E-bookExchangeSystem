
@extends('backend.layouts.master')
@section('content')

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="mdi mdi-table "></i></span> Offer Details
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
                                    <label class="label">Offer Id :</label>
                                    <p>{{$offer->offer_id}}</p>
                                </div>
                            </div>

                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Offer Title :</label>
                                    <p>{{$offer->offer_title}}</p> 
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Start Date :</label>
                                    <p>{{$offer->start_date}}</p> 
                                </div>
                            </div>


                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">End Date :</label>
                                    <p>{{$offer->end_date}}</p> 
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Discount :</label>
                                    <p>{{$offer->discount_amount}}</p> 
                                </div>
                            </div>
                     <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Offer Description :</label>
                                    <p>{{$offer->offer_description}}</p> 
                                </div>
                            </div>
                               
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Status :</label>
                                    <p>{{$offer->status}}</p> 
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Terms&Conditions :</label>
                                    <p>{{$offer->termsconditions}}</p> 
                                </div>
                            </div>
                    
                             </div>
                    </form>
                  </div>
                </div>
        </div>
    <a href="{{route('offer.index')}}" class="button btn btn-danger">Back</a>
    </div>
</div>
</section>
@endsection