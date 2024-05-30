@extends('layouts.app')
@section('style')
            <link rel="stylesheet" href="{{ url('assets/css/plugins/nouislider/nouislider.css') }}">
            <style type="text/css">
                .active-color {
                    border: 3px solid #000 !important;
                }

                .filter-colors {
                    display: flex;
                 }

                .color-wrapper {
                    position: relative;
                    margin: 0 2px; /* Adjust the margin to reduce spacing between colors */
                }

                .color-tooltip {
                    position: absolute;
                    top: -30px; /* Adjust the distance above the color */
                    left: 50%;
                    transform: translateX(-50%);
                    background-color: #fff;
                    padding: 5px 10px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    display: none; /* Hide tooltip by default */
                }

                .color-wrapper:hover .color-tooltip {
                    display: block; /* Show tooltip on hover */
                }


            </style>
@endsection
@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">

            <h1 class="page-title">My Wishlist</h1>

        </div>
    </div>
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">My Wishlist</a></li>

            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                         @include('product._list')
 
                </div>

                <div>
                {!! $getProduct->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
    @section('script')

@endsection
