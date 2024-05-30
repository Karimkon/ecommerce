@extends('layouts.app')

@section('content')
    <main class="main">
        <!-- Breadcrumb navigation -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Money Back Guarantee</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <!-- Page header -->
        <div class="container">
            <div class="page-header page-header-big text-center" style="background-image: url('assets/images/backgrounds/bg-1.jpg')">
                <h1 class="page-title text-white">Money Back Guarantee<span class="text-white">Trust us</span></h1>
            </div><!-- End .page-header -->
        </div><!-- End .container -->

        <!-- Page content -->
        <div class="page-content pb-0">
            <div class="container">
                <!-- Money-back guarantee section -->
                <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="title">Money Back Guarantee</h2><!-- End .title -->
                                <p class="lead text-primary mb-3">We Stand Behind Our Products</p><!-- End .lead text-primary -->
                                <p class="mb-2">At Ehsan Market, we are confident in the quality of our products. That's why we offer a 100% money-back guarantee on all purchases. If for any reason you are not satisfied with your order, simply contact us within 30 days of receipt, and we will provide a full refund, no questions asked.</p>
                                <p class="mb-2">Your satisfaction is our top priority, and we strive to ensure that every customer has a positive shopping experience with us. Shop with confidence knowing that your purchase is backed by our money-back guarantee.</p>
                            </div><!-- End .col-lg-12 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-6 pb-6 -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection
