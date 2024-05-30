@extends('layouts.app')

@section('content')


<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Payment Methods</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <div class="container">
        <div class="page-header page-header-big text-center" style="background-image: url('assets/images/backgrounds/payment.jpg')">
            <h1 class="page-title">Payment Methods</h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="payment-method">
                        <h2 class="title">Cash on Delivery</h2>
                        <p>Cash on Delivery allows customers to pay for their orders with cash upon delivery.</p>
                    </div><!-- End .payment-method -->
                </div><!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <div class="payment-method">
                        <h2 class="title">Stripe</h2>
                        <p>Stripe is a payment gateway that enables businesses to accept payments online securely.</p>
                    </div><!-- End .payment-method -->
                </div><!-- End .col-lg-4 -->

                <div class="col-lg-4">
                    <div class="payment-method">
                        <h2 class="title">PayPal</h2>
                        <p>PayPal is an online payment system that allows users to make payments and transfer money online.</p>
                    </div><!-- End .payment-method -->
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection
