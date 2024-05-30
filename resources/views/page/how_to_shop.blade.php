@extends('layouts.app')

@section('content')

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">How to Shop on Ehsan Market</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->

    <div class="page-content">
        <div class="container">
            <div class="step-by-step-guide">
                <div class="step">
                    <div class="step-icon">
                        <span>1</span>
                    </div><!-- End .step-icon -->
                    <h3 class="step-title">Create an Account</h3>
                    <p>Start by creating an account on Ehsan Market. Click on the 'Sign Up' button and fill in the required details to register.</p>
                </div><!-- End .step -->

                <div class="step">
                    <div class="step-icon">
                        <span>2</span>
                    </div><!-- End .step-icon -->
                    <h3 class="step-title">Log In</h3>
                    <p>After successfully creating your account, log in using your credentials.</p>
                </div><!-- End .step -->

                <div class="step">
                    <div class="step-icon">
                        <span>3</span>
                    </div><!-- End .step-icon -->
                    <h3 class="step-title">Navigate to the Shop Menu</h3>
                    <p>Once logged in, go to the 'Shop' menu located at the top of the page.</p>
                </div><!-- End .step -->

                <div class="step">
                    <div class="step-icon">
                        <span>4</span>
                    </div><!-- End .step-icon -->
                    <h3 class="step-title">Choose a Category</h3>
                    <p>Browse through the categories available and select the one that matches your desired product.</p>
                </div><!-- End .step -->

                <div class="step">
                    <div class="step-icon">
                        <span>5</span>
                    </div><!-- End .step-icon -->
                    <h3 class="step-title">Select Your Desired Product</h3>
                    <p>Within the chosen category, browse through the products and select the one you wish to purchase.</p>
                </div><!-- End .step -->

                <div class="step">
                    <div class="step-icon">
                        <span>6</span>
                    </div><!-- End .step-icon -->
                    <h3 class="step-title">Add to Cart</h3>
                    <p>Click on the 'Add to Cart' button next to the selected product to add it to your shopping cart.</p>
                </div><!-- End .step -->

                <div class="step">
                    <div class="step-icon">
                        <span>7</span>
                    </div><!-- End .step-icon -->
                    <h3 class="step-title">Proceed to Checkout</h3>
                    <p>Once you've finished adding items to your cart, proceed to checkout by clicking on the 'Checkout' button.</p>
                </div><!-- End .step -->

                <div class="step">
                    <div class="step-icon">
                        <span>8</span>
                    </div><!-- End .step-icon -->
                    <h3 class="step-title">Payment Options</h3>
                    <p>Choose your preferred payment method among Cash on Delivery, Stripe, or PayPal, and complete the payment process.</p>
                </div><!-- End .step -->
            </div><!-- End .step-by-step-guide -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->

    <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-7.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-7">
                    <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                        <div class="col">
                            <h3 class="cta-title text-white">Still Have Questions?</h3><!-- End .cta-title -->
                            <p class="cta-desc text-white">Feel free to contact us for further assistance.</p><!-- End .cta-desc -->
                        </div><!-- End .col -->

                        <div class="col-auto">
                            <a href="{{ url('contact') }}" class="btn btn-outline-white"><span>Contact Us</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .col-auto -->
                    </div><!-- End .row no-gutters -->
                </div><!-- End .col-md-10 col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cta -->
</main><!-- End .main -->

@endsection
