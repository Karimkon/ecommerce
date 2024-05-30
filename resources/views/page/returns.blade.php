@extends('layouts.app')

@section('style')
    <style type="text/css">
        /* Your custom styles go here */
    </style>
@endsection

@section('content')
    <main class="main">
        <!-- Breadcrumb navigation -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Returns Policy</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <!-- Page header -->
        <div class="container">
            <div class="page-header page-header-big text-center" style="background-image: url('assets/images/backgrounds/bg-1.jpg')">
                <h1 class="page-title text-white">Returns Policy<span class="text-white">Easy Returns & Exchanges</span></h1>
            </div><!-- End .page-header -->
        </div><!-- End .container -->

        <!-- Page content -->
        <div class="page-content pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <h2 class="title">Our Returns Policy</h2><!-- End .title -->
                        <p>At Ehsan Market, we want you to be completely satisfied with your purchase. If for any reason you are not satisfied, we offer easy returns and exchanges within 30 days of purchase.</p>
                    </div><!-- End .col-lg-6 -->

                    <div class="col-lg-6">
                        <h2 class="title">How to Return or Exchange</h2><!-- End .title -->
                        <p>To return or exchange an item, please follow these steps:</p>
                        <ol>
                            <li>Contact our customer service team to initiate the return or exchange process.</li>
                            <li>Package the item securely, including any accessories or documentation, and include the original packaging.</li>
                            <li>Ship the item back to us using a trackable shipping method.</li>
                            <li>Once we receive your return, we will process the refund or exchange as soon as possible.</li>
                        </ol>
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection

@section('script')
    <script type="text/javascript">
        // Your custom scripts go here
    </script>
@endsection
