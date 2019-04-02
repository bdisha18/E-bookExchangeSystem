
@extends('backend.layouts.master')
@section('content')
@php
use App\Model\Member;
@endphp

<!--site header ends -->    
<section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h4 class=""> <span class="btn btn-white-translucent">
                                <i class="icon-placeholder mdi mdi-cash-multiple  "></i></span> Transactions
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
                          @if (session('status'))
                          <p style="color: green;">{{session('status')}}</p>
                          @endif
                          <form action="{{route('transaction.index')}}" method="get">
                            <input name="search" type="text" placeholder="Search.." >                   
                            <button type="submit"><i class="mdi mdi-magnify"></i></button>
                          </form>
                          
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($transactions))
                                <table class="table table-hover ">
                                    <thead>
                                      <tr>
                                        <th>Sr.No.</th>
                                          <th>Username</th>
                                          <th>Reference Id</th>
                                          <th>Payment Method</th>
                                          <th>Amount</th>
                                          <th>Status</th>
                                          <th>Transaction Date</th>
                                          <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @php
                                      $i =1;
                                      @endphp
                                      @foreach($transactions as $transaction)
                                      <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{Member::where('user_id', $transaction->user_id)->value('username')}}
                                        </td>
                                        <td>{{$transaction->reference_id}}</td>
                                        <td>{{$transaction->payment_method}}</td>
                                        <td>{{$transaction->amount}}</td>
                                        <td>{{$transaction->status}}</td>
                                        <td>{{$transaction->created_at}}</td>

                                        <td> 
                                              <a href="{{ route('transaction.view',$transaction->transaction_id) }}"><button type="button" title="view" class="btn btn-success btn-xs"><span class="mdi mdi-eye"></span></button></a> 
                                                                      
                                              <a href="{{ route('transaction.edit',$transaction->transaction_id) }}"><button type="button" title="edit" class="btn btn-primary btn-xs"><span class="mdi mdi-launch"></span></button></a>

                                        </td>
                                        
                                      </tr>
                                      @endforeach
                                    </table>
                                     @else
                                    <div><h2>No Transaction Found.</h2></div>
                                     @endif
                                  </div>

                            <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                        </div>
                      </div>
                    </section>
                  @endsection