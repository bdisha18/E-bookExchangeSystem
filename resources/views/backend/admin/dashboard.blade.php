@extends('backend.layouts.master')
@section('content')
<section class="admin-content">
        <div class="bg-dark m-b-30">
            <div class="container">
                <div class="row p-b-60 p-t-60">

                    <div class="col-md-10 mx-auto text-center text-white p-b-30">
                        <div class="m-b-20">
                            <div class="avatar avatar-xl my-auto">
                                <img class="avatar-img rounded" src="assets/img/logos/instagram.jpg" alt="">

                            </div>
                        </div>
                        <h1>Dashboard</h1>
                    </div>

                </div>
            </div>
        </div>
        <div class="container pull-up">
            <div class="row">
                <div class="col-lg-3 col-md-6 m-b-30">
                    <div class="card card-hover">
                        <div class="card-body">
                            <div class="text-center p-t-20">
                                <div class="avatar-lg avatar">
                                    <div class="avatar-title rounded-circle badge-soft-success"><i
                                                class="mdi mdi-account-multiple h1 m-0"></i></div>

                                </div>
                                <div class="text-center">
                                    <h1 class="fw-600 p-t-20">21.32k</h1>
                                    <p class="text-muted fw-600">Total users</p>
                                    <div class="text-success h5 fw-600">
                                        <i class="mdi mdi-arrow-up"></i> 112.6%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 m-b-30">
                    <div class="card card-hover">
                        <div class="card-body">
                            <div class="text-center p-t-20">
                                <div class="avatar-lg avatar">
                                    <div class="avatar-title rounded-circle badge-soft-danger"><i
                                                class="mdi mdi-account-multiple h1 m-0"></i></div>

                                </div>
                                <div class="text-center">
                                    <h1 class="fw-600 p-t-20">300</h1>
                                    <p class="text-muted fw-600">Total Publishers</p>
                                    <div class="text-danger h5 fw-600">
                                        <i class="mdi mdi-arrow-up"></i> 112.6%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 m-b-30">
                    <div class="card card-hover">
                        <div class="card-body">
                            <div class="text-center p-t-20">
                                <div class="avatar-lg avatar">
                                    <div class="avatar-title rounded-circle badge-soft-info"><i
                                                class="mdi mdi-eye-settings-outline h1 m-0"></i></div>

                                </div>
                                <div class="text-center">
                                    <h1 class="fw-600 p-t-20">750</h1>
                                    <p class="text-muted fw-600">Total Selling Books</p>
                                    <div class="text-info h5 fw-600">
                                        <i class="mdi mdi-arrow-up"></i> 35.69%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 m-b-30">
                    <div class="card card-hover">
                        <div class="card-body">
                            <div class="text-center p-t-20">
                                <div class="avatar-lg avatar">
                                    <div class="avatar-title rounded-circle badge-soft-dark"><i
                                                class="mdi mdi-vector-intersection h1 m-0"></i></div>

                                </div>
                                <div class="text-center">
                                    <h1 class="fw-600 p-t-20">50</h1>
                                    <p class="text-muted fw-600">Top rated Books</p>
                                    <div class="text-dark h5 fw-600">
                                        <i class="mdi mdi-arrow-down"></i> 12%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 m-b-30">
                    <div class="card card-hover">
                        <div class="card-body">
                            <div class="text-center p-t-20">
                                <div class="avatar-lg avatar">
                                    <div class="avatar-title rounded-circle badge-soft-primary"><i
                                                class="mdi mdi-account h1 m-0"></i></div>

                                </div>
                                <div class="text-center">
                                    <h1 class="fw-600 p-t-20">16.56%</h1>
                                    <p class="text-muted fw-600">Active Users</p>
                                    <div class="text-primary h5 fw-600">
                                        <i class="mdi mdi-arrow-down"></i> 12%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               

            </div>
        </div>
</section>
@endsection