<footer class="footer footer-dark">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget widget-about">
                        <img src="{{ url('assets/images/ehan.png') }}" class="footer-logo" alt="Footer Logo" width="155" height="56">
                        <p>Shope safely on Ehsan market, The Ummah's market</p>

                        <div class="social-icons">
                            @if(!empty($getSystemSettingApp->facebook_link))
                            <a href="{{ $getSystemSettingApp->facebook_link }}" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            @endif
                            @if(!empty($getSystemSettingApp->twiter_link))
                            <a href="{{ $getSystemSettingApp->twiter_link }}" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            @endif
                            @if(!empty($getSystemSettingApp->instagram_link))
                            <a href="{{ $getSystemSettingApp->instagram_link }}" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            @endif
                            @if(!empty($getSystemSettingApp->youtube_link))
                            <a href="{{ $getSystemSettingApp->youtube_link }}" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                            @endif

                         </div><!-- End .soial-icons -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li><a href="{{ url('about') }}">About Us</a></li>
                            <li><a href="{{ url('how-to') }}">How to shop on Ehsan Market</a></li>
                            <li><a href="{{ url('faq')}}">FAQ</a></li>
                            <li><a href="{{ url('contact') }}">Contact us</a></li>
                            <li><a href="{{ url('blog') }}">Blogs</a></li>
                         </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="{{ url('payment-method')}}">Payment Methods</a></li>
                            <li><a href="{{ url('money-back-guarantee') }}">Money-back guarantee!</a></li>
                            <li><a href="{{ url('returns') }}">Returns</a></li>
                            <li><a href="{{ url('shipping') }}">Shipping</a></li>
                            <li><a href="{{ url('terms-and-conditions')}}">Terms and conditions</a></li>
                            <li><a href="{{ url('privacy-policy')}}">Privacy Policy</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#" id="footer-signin-link">Sign In</a></li>
                            <li><a href="{{ url('cart') }}">View Cart</a></li>
                            @if(!empty(Auth::check()))
                            <li><a href="{{ url('users/order') }}">My Orders</a></li>
                            @endif
                            <li><a href="{{ url('help') }}">Help</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">Copyright © <span id="current-year"></span> Ehsan Market. All Rights Reserved.</p><!-- End .footer-copyright -->
            <figure class="footer-payments">
                <img src="{{ url('assets/images/ehan.png') }}" alt="Payment methods" width="202" height="20">
            </figure><!-- End .footer-payments -->
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer>
<script>
    // Get the current year
    var currentYear = new Date().getFullYear();

    // Set the current year in the footer copyright notice
    document.getElementById('current-year').textContent = currentYear;
</script>
