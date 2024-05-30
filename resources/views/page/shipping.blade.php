@extends('layouts.app')

@section('content')


<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shipping</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <div class="container">
        <div class="page-header page-header-big text-center" style="background-image: url('assets/images/backgrounds/bg-1.jpg')">
            <h1 class="page-title text-white">convenient<span class="text-white"> deliveries</span></h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content pb-0">
        <div class="container">
            <!-- Existing content here -->

            <!-- Shipping Information Section -->
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h2 class="title">Shipping Information</h2>
                    <p>At Ehsan Market, we strive to provide the best shipping experience for our customers. Here's what you need to know about our shipping policies:</p>
                    <ul>
                        <li>International shipping available with competitive rates.</li>
                        <li>Orders are processed and shipped within 1-2 business days.</li>
                        <li>Fast and reliable shipping options available.</li>
                        <li>Track your order in real-time with our order tracking system.</li>
                        <li>Free shipping on orders over $100.</li>
                        <li>Express shipping option for urgent orders.</li> 
                        <li>Estimated delivery times: 3-5 business days for domestic orders, 7-10 business days for international orders.</li>
                        <li>Easy returns and exchanges within 30 days of purchase.</li>
                        <li>Special offers: occasional free expedited shipping promotions for loyalty members.</li>
                    </ul>
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
            <!-- End Shipping Information Section -->

            <div class="mb-5"></div><!-- End .mb-4 -->
        </div><!-- End .container -->
        <!-- Existing content continues here -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection
