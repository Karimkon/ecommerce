@extends('layouts.app')

@section('content')

<main class="main">
    <div class="container">
        <div class="page-header page-header-big text-center" style="background-image: url('assets/images/backgrounds/bg-1.jpg')">
            <h1 class="page-title text-white">Need Help?<span class="text-white">We're Here for You</span></h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h2 class="title">Contact Us</h2><!-- End .title -->
                    <p>Have any questions or concerns? Feel free to reach out to us. Our dedicated team is here to assist you.</p>
                    <p>You can also contact us directly via WhatsApp for instant support.</p>
                    <p>Click the button below to message us on WhatsApp.</p>
                    <a href="https://wa.me/256707208954" target="_blank" class="btn btn-primary">Message Mentorhubtechnologies on WhatsApp</a>
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <h2 class="title">Contact Information</h2><!-- End .title -->
                    <ul class="contact-info">
                        <li>
                            <span class="contact-info-label">Email:</span><a href="mailto:info@ehsanmarket.com"> info@ehsanmarket.com</a>
                        </li>
                        <li>
                            <span class="contact-info-label">Phone:</span><b> +256 707 208954 </b>/
                            <span class="contact-info-label">Phone:</span><b> +256 761 350571 </b>
                        </li>
                        <li>
                            <span class="contact-info-label">Address:</span> Ssemawata Road, Kampala, Uganda
                        </li>
                    </ul>
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->

            <div class="mb-5"></div><!-- End .mb-4 -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection
