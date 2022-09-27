@extends('base')
@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">404</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">404</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Blank area start -->
    <div class="blank-page-area pb-100px pt-100px" data-bg-image="assets/images/404/404.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-not-found text-center">
                        <h2>Oops!</h2>
                        <p>Sorry,Page Not Found.</p>
                        <a href="/">Back To Home <i class="fa fa-home"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blank area end -->
@endsection
