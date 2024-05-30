<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EHSAN MARKET - {{ !empty($meta_title) ? $meta_title : '' }}</title>

    @if (!empty($meta_keywords))
    <meta name="description" content="{{ $meta_description }}">
    @endif

    @if (!empty($meta_keywords))
    <meta name="keywords" content="{{ $meta_keywords }}">
    @endif

    @php 
        $getSystemSettingApp = App\Models\SystemSettingsModel::getSingle();
    @endphp

    <link rel="shortcut icon" href="{{ $getSystemSettingApp->getFevicon() }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">



    @yield('style')

    <style style="text/css">
        .btn-wishlist-add::before {
            content: '\f233' !important;
        }
    </style>

</head>

<body>
    <div class="page-wrapper">


        @include('layouts._header')

        @yield('content')

        @include('layouts._footer')






    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    @include('layouts._mobile_menu')


    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="" id="submitFormLogin" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="singin-email" >Email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" id="singin-password" class="form-control" name="password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember" name="is_remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="{{ url('forgot-password') }}" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>

                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="" id="submitFormRegister" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="singin-name">Name <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="singin-name" name="name" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-email">Username or email address <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="singin-email" name="email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password <span style="color: red;">*</span></label>
                                            <input type="password" class="form-control" id="singin-password" name="password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>

                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

<!--
    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Ehsan Market eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div>
                                </div>
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- Plugins JS File -->
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('assets/js/superfish.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @yield('script')
    <!-- Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    <script type="text/javascript">

    $('body').delegate('#submitFormLogin', 'submit', function(e){
        e.preventDefault();

        $.ajax({
                type: "POST",
                url: "{{ url('auth_login') }}",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {

                    if(data.status == true)
                    {
                        location.reload();
                    }
                    else
                    {
                        alert(data.message);
                    }
                },
                error: function(data) {
                    // Handle error
                }
            });
    });

    $('body').delegate('#submitFormRegister', 'submit', function(e){
        e.preventDefault();

        $.ajax({
                type: "POST",
                url: "{{ url('auth_register') }}",
                data: $(this).serialize(),
                dataType: "json",
                success: function(data) {
                    alert(data.message);
                    if(data.status == true)
                    {
                        location.reload();
                    }
                },
                error: function(data) {
                    // Handle error
                }
            });
    });

    $('body').delegate('.add_to_wishlist', 'click', function(e){
    var product_id = $(this).attr('id');
    $.ajax({
        type: "POST",
        url: "{{ url('add_to_wishlist') }}",
        data: {
            "_token" : "{{ csrf_token() }}",
            product_id: product_id,
        },
        dataType: "json",
        success: function(data)
        {
            if (data.is_wishlist == 0)
            {
                $('add_to_wishlist'+product_id).removeClass('btn-wishlist-add'); // Remove class if not in wishlist
            }
            else
            {
                $('add_to_wishlist'+product_id).addClass('btn-wishlist-add'); // Add class if in wishlist
            }
        }
    });
});


    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get a reference to the sign-in link in the footer
        var footerSigninLink = document.getElementById('footer-signin-link');

        // Get a reference to the sign-up link in the header/cta section
        var headerSignupLink = document.getElementById('header-signup-link');

        // Get a reference to the sign-in modal
        var signinModal = document.getElementById('signin-modal');

        // Function to show the sign-in modal
        function showSigninModal(event) {
            // Prevent the default link behavior
            event.preventDefault();

            // Show the sign-in modal
            $(signinModal).modal('show');
        }

        // Add click event listener to the sign-in link in the footer
        footerSigninLink.addEventListener('click', showSigninModal);

        // Add click event listener to the sign-up link in the header/cta section
        headerSignupLink.addEventListener('click', showSigninModal);
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#submitFormRegister').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message
                        }).then(function() {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'success',
                        text: 'You have successfully created your account, please Login.'
                    });

                    // Clear form fields on error
                    form[0].reset();
                }
            });
        });
    });

    $('body').delegate('.add_to_wishlist', 'click', function(e){
    e.preventDefault(); // Prevent default link behavior

    var product_id = $(this).attr('id');

    $.ajax({
        type: "POST",
        url: "{{ url('add_to_wishlist') }}",
        data: {
            "_token" : "{{ csrf_token() }}",
            product_id: product_id,
        },
        dataType: "json",
        success: function(data) {
            if (data.status == true) {
                // Product added to wishlist successfully
                // Show success message
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Product added to wishlist!'
                });
                // Optionally, you can update the UI here, like changing the button style
            } else {
                // Product could not be added to wishlist
                // Show error message
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Failed to add product to wishlist!'
                });
            }
        },
        error: function(data) {
            // Handle error
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An error occurred while processing your request!'
            });
        }
    });
});

</script>


</body>


</html>
