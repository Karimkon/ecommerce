@extends('layouts.app')

@section('content')

<main class="main">
    <div class="container">
        <div class="page-header page-header-big text-center" style="background-image: url('assets/images/backgrounds/bg-2.jpg')">
            <h1 class="page-title text-white">Terms and Conditions<span class="text-white">Our Legal Agreement</span></h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2 class="title mb-3">Introduction</h2><!-- End .title -->
                    <p>Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern Ehsan Market's relationship with you in relation to this website.</p>
                    <p>The term 'Ehsan Market' or 'us' or 'we' refers to the owner of the website whose registered office is Ssemawata road.<!-- Our company registration number is [Your Company Registration Number]-->. The term 'you' refers to the user or viewer of our website.</p>

                    <h2 class="title mb-3">Use of Website</h2><!-- End .title -->
                    <p>The use of this website is subject to the following terms of use:</p>
                    <ul class="list">
                        <li>The content of the pages of this website is for your general information and use only. It is subject to change without notice.</li>
                        <li>This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties: [IP address
                            Browser type
                            Operating system
                            Date and time of visit
                            Referring website
                            Pages visited on the site
                            Clickstream data (e.g., which links are clicked on)
                            Location data
                            Device information (e.g., device type, screen resolution)
                            Cookies and tracking pixels
                            User interactions (e.g., form submissions, downloads)
                            Demographic information (if provided by the user)].</li>
                        <li>Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness, or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.</li>
                        <li>Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services, or information available through this website meet your specific requirements.</li>
                        <li>This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.</li>
                    </ul>

                    <h2 class="title mb-3">Copyright</h2><!-- End .title -->
                    <p>This website and its content are copyright of Mentorhub Technologies - © {{ 'Mentorhub Technologies ' .date('Y') }} All rights reserved.</p>
                    <p>Any redistribution or reproduction of part or all of the contents in any form is prohibited other than the following:</p>
                    <ul class="list">
                        <li>You may print or download to a local hard disk extracts for your personal and non-commercial use only.</li>
                        <li>You may copy the content to individual third parties for their personal use, but only if you acknowledge the website as the source of the material.</li>
                    </ul>

                    <h2 class="title mb-3">Contact Information</h2><!-- End .title -->
                    <p>If you have any questions or concerns about our terms and conditions, please contact us at Whatsap <a href="https://wa.me/256707208954" target="_blank" class="btn btn-primary">Message Mentorhubtechnologies on WhatsApp</a>.</p>
                </div><!-- End .col-lg-8 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection
