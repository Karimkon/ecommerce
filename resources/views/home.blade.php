@extends('layouts.app')

@section('content')
        <main class="main">
            <div class="intro-section bg-lighter pt-5 pb-6">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="intro-slider-container slider-container-ratio slider-container-1 mb-2 mb-lg-0">
                                <div class="intro-slider intro-slider-1 owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{
                                        "nav": false,
                                        "responsive": {
                                            "768": {
                                                "nav": true
                                            }
                                        }
                                    }'>
                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="assets/images/slider/hajjats.jpg">
                                                <img src="assets/images/slider/hajjats.jpg" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle">Topsale Collection</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title">Exclusive<br>Products</h1><!-- End .intro-title -->
                                            <strong>
                                                <h6 class="intro-subtitle">Experience the essence of modesty and elegance with our latest collection of Islamic clothing in Uganda. From traditional wear to contemporary styles, find the perfect attire that reflects your faith and fashion sense.</h6>
                                            </strong>
                                            <a href="https://localhost/ecommerce-main/islamic-womens-clothing" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="assets/images/slider/order.jpg">
                                                <img src="assets/images/slider/order.jpg" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle"><strong>Exclusive Islamic Fashion</strong></h3><!-- End .h3 intro-subtitle -->
                                            <h2 class="intro-title" style="color: rgba(84,50,32,255);"> Convenient Ordering, Reliable Delivery</h2><!-- End .intro-title -->

                                            <a href="{{ url('https://ehsanmarket.com/islamic-womens-clothing') }}" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->

                                    <div class="intro-slide">
                                        <figure class="slide-image">
                                            <picture>
                                                <source media="(max-width: 480px)" srcset="assets/images/slider/ms3.jpg">
                                                <img src="assets/images/slider/ms3.jpg" alt="Image Desc">
                                            </picture>
                                        </figure><!-- End .slide-image -->

                                        <div class="intro-content">
                                            <h3 class="intro-subtitle">Step into Comfort</h3><!-- End .h3 intro-subtitle -->
                                            <h1 class="intro-title"> Dive into Our Leisure <br>Push-ins Collection</h1><!-- End .intro-title -->

                                            <a href="category.html" class="btn btn-outline-white">
                                                <span>SHOP NOW</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </a>
                                        </div><!-- End .intro-content -->
                                    </div><!-- End .intro-slide -->
                                </div><!-- End .intro-slider owl-carousel owl-simple -->

                                <span class="slider-loader"></span><!-- End .slider-loader -->
                            </div><!-- End .intro-slider-container -->
                        </div><!-- End .col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="intro-banners">
                                <div class="row row-sm">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display">
                                            <a href="#">
                                                <img src="assets/images/banners/home/intro/mosque.jpg" alt="Banner">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-darkwhite"><a href="#">Clearence</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="#">Shop around<br>Kampala</a></h3><!-- End .banner-title -->
                                              <!--  <a href="#" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a> -->
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->

                                    <div class="col-md-6 col-lg-12">
                                        <div class="banner banner-display mb-0">
                                            <a href="#">
                                                <img src="assets/images/banners/home/intro/banner-2.jpg" alt="Banner">
                                            </a>

                                            <div class="banner-content">
                                                <h4 class="banner-subtitle text-darkwhite"><a href="#">New in</a></h4><!-- End .banner-subtitle -->
                                                <h3 class="banner-title text-white"><a href="{{ url('https://localhost/ecommerce-main/Bags') }}">Bags <br>Collection</a></h3><!-- End .banner-title -->
                                                <a href="{{ url('https://localhost/ecommerce-main/Bags') }}" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                            </div><!-- End .banner-content -->
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 col-lg-12 -->
                                </div><!-- End .row row-sm -->
                            </div><!-- End .intro-banners -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->

                    <div class="mb-6"></div><!-- End .mb-6 -->

                    <div class="owl-carousel owl-simple" data-toggle="owl"
                        data-owl-options='{
                            "nav": false,
                            "dots": false,
                            "margin": 30,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                }
                            }
                        }'>
                        <a href="#" class="brand">
                            <img src="assets/images/brands/1.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/2.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/3.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/4.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/5.png" alt="Brand Name">
                        </a>

                        <a href="#" class="brand">
                            <img src="assets/images/brands/6.png" alt="Brand Name">
                        </a>
                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .bg-lighter -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title-lg">Trendy Products</h2><!-- End .title -->

                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="trendy-all-link" data-toggle="tab" href="#trendy-all-tab" role="tab" aria-controls="trendy-all-tab" aria-selected="true">All</a>
                        </li>

                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            @foreach ($products as $product)
                            @php
                                $getProductImage = $product->getImageSingle($product->id);
                            @endphp
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="{{ url($product->slug) }}">
                                        @if (!empty($getProductImage) && !empty($getProductImage->getLogo()))
                                            <img style="width: 100%; height: auto; max-height: 280px; object-fit: cover;" src="{{ $getProductImage->getLogo() }}" alt="{{ $product->title }}" class="product-image">
                                        @endif
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">{{ $product->title }}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        ${{ $product->price }}
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                            @endforeach

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->


                </div><!-- End .tab-content -->
            </div><!-- End .container -->

    		<div class="container categories pt-6">
        		<h2 class="title-lg text-center mb-4">Shop by Categories</h2><!-- End .title-lg text-center -->

        		<div class="row">
        			<div class="col-6 col-lg-4">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="assets/images/banners/home/musilamu.jpg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="{{ url('https://ehsanmarket.com/kanzuz') }}">ISLAMIC MEN'S CLOTHING</a></h3><!-- End .banner-title -->
                				<a href="{{ url('https://ehsanmarket.com/kanzuz') }}" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->
        			<div class="col-6 col-lg-4 order-lg-last">
        				<div class="banner banner-display banner-link-anim">
                			<a href="#">
                				<img src="assets/images/banners/home/women.jpg" alt="Banner">
                			</a>

                			<div class="banner-content banner-content-center">
                				<h3 class="banner-title text-white"><a href="{{ url('https://ehsanmarket.com/islamic-womens-clothing') }}">Islamic Women's Apparel</a></h3><!-- End .banner-title -->
                				<a href="{{ url('https://ehsanmarket.com/islamic-womens-clothing') }}" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                			</div><!-- End .banner-content -->
            			</div><!-- End .banner -->
        			</div><!-- End .col-sm-6 col-lg-3 -->
        			<div class="col-sm-12 col-lg-4 banners-sm">
                        <div class="row">
            				<div class="banner banner-display banner-link-anim col-lg-12 col-6">
                    			<a href="#">
                    				<img src="assets/images/banners/home/watches.jpg" alt="Banner">
                    			</a>

                    			<div class="banner-content banner-content-center">
                    				<h3 class="banner-title text-white"><a href="{{ url('https://ehsanmarket.com/watches/') }}">Watches</a></h3><!-- End .banner-title -->
                    				<a href="{{ url('https://ehsanmarket.com/watches/') }}" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                    			</div><!-- End .banner-content -->
                			</div><!-- End .banner -->

                			<div class="banner banner-display banner-link-anim col-lg-12 col-6">
                    			<a href="#">
                    				<img src="assets/images/banners/home/banner-3.jpg" alt="Banner">
                    			</a>

                    			<div class="banner-content banner-content-center">
                    				<h3 class="banner-title text-white"><a href="{{ url('https://ehsanmarket.com/shoes-sneakers') }}">Gentleman's Footwear</a></h3><!-- End .banner-title -->
                    				<a href="#" class="btn btn-outline-white banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                    			</div><!-- End .banner-content -->
                			</div><!-- End .banner -->
                        </div>
        			</div><!-- End .col-sm-6 col-lg-3 -->
        		</div><!-- End .row -->
    		</div><!-- End .container -->

            <div class="mb-5"></div><!-- End .mb-6 -->


            <div class="container">
                <hr>
            	<div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-rocket"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                                <p>Free shipping for orders over $50</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-rotate-left"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                                <p>Free 100% money back guarantee</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-card text-center">
                            <span class="icon-box-icon">
                                <i class="icon-life-ring"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                                <p>Alway online feedback 24/7</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- End .row -->

                <div class="mb-2"></div><!-- End .mb-2 -->
            </div><!-- End .container -->

            <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-6.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-9 col-xl-8">
                            <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                                <div class="col">
                                    <h3 class="cta-title text-white">Sign Up & Get 10% Off</h3><!-- End .cta-title -->
                                    <p class="cta-desc text-white">Ehsan Market - shop with Iman, shop with ehsan</p><!-- End .cta-desc -->
                                </div><!-- End .col -->

                                <div class="col-auto">
                                    <a href="#" class="btn btn-outline-white" id="header-signup-link"><span>SIGN UP</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .col-auto -->
                            </div><!-- End .row no-gutters -->
                        </div><!-- End .col-md-10 col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
        </main><!-- End .main -->

@endsection
