@extends('layouts.app')

@section('style')
<style type="text/css">
    /* Text Fade-in Animation */
    @keyframes fadeInText {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Image Fade-in Animation */
    @keyframes fadeInImage {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* JavaScript Scroll-triggered Animation */
    .scroll-animation {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .scroll-animation.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

@endsection

@section('content')


<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $getPage->title }}</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->
    <div class="container">
        <div class="page-header page-header-big text-center" style="background-image: url('assets/images/about-header-bg.jpg')">
            <h1 class="page-title text-white">{{ $getPage->title }}<span class="text-white">Who we are</span></h1>
        </div><!-- End .page-header -->
    </div><!-- End .container -->

    <div class="page-content pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <h2 class="title">Our Vision</h2><!-- End .title -->
                    <p>Here at Ehsan Market , our vision is to become the leading provider of Islamic-inspired fashion and lifestyle products in Uganda, catering to the diverse needs of our customers while upholding our commitment to quality, authenticity, and tradition.</p>
                </div><!-- End .col-lg-6 -->

                <div class="col-lg-6">
                    <h2 class="title">Our Mission</h2><!-- End .title -->
                    <p>Our mission is to empower individuals to express their faith and identity through our carefully curated collection of Islamic clothing, footwear, accessories, and more. We strive to create an inclusive shopping experience that celebrates diversity and promotes cultural appreciation.</p>
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->

            <div class="mb-5"></div><!-- End .mb-4 -->
        </div><!-- End .container -->

        <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-3 mb-lg-0 animated fadeInUp">
                        <h2 class="title">Who We Are</h2><!-- End .title -->
                        <p class="lead text-primary mb-3">Welcome to our online store, where excellence meets faith! Established in 2023 in Kampala, Uganda, we take pride in offering a diverse range of products that cater to the needs of our Islamic community while warmly welcoming customers from all backgrounds.</p><!-- End .lead text-primary -->
                        <p class="mb-2">{{ $getPage->description }}</p>

                            <!--
                        <a href="blog.html" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                           <span>VIEW OUR NEWS</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                         -->
                    </div><!-- End .col-lg-5 -->

                    <div class="col-lg-6 offset-lg-1 scroll-animation">
                        <div class="about-images">
                            <img src="assets/images/about/img-1.jpg" alt="" class="about-img-front">
                            <img src="assets/images/about/img-2.jpg" alt="" class="about-img-back">
                        </div><!-- End .about-images -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .bg-light-2 pt-6 pb-6 -->

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="brands-text">
                        <h2 class="title">Experience the pinnacle of quality and style at Ehsan Market, your ultimate destination for premium Islamic fashion and lifestyle essentials.</h2><!-- End .title -->
                        <p>Discover a world of elegance and tradition as we bring you the finest selection of Islamic clothing, footwear, accessories, and more. With our commitment to excellence and faith, we ensure that every product meets the highest standards of quality and craftsmanship.

                            Join us on a journey where luxury meets tradition, only at Ehsan Market.</p>
                    </div><!-- End .brands-text -->
                </div><!-- End .col-lg-5 -->
                <div class="col-lg-7">
                    <div class="brands-display">
                        <div class="row justify-content-center">
                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/1.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/2.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/3.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/4.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/5.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/6.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/7.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/8.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <a href="#" class="brand">
                                    <img src="assets/images/brands/9.png" alt="Brand Name">
                                </a>
                            </div><!-- End .col-sm-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .brands-display -->
                </div><!-- End .col-lg-7 -->
            </div><!-- End .row -->

            <hr class="mt-4 mb-6">

            <h2 class="title text-center mb-4">Meet Our Team</h2><!-- End .title text-center mb-2 -->

            <div class="row">
                <div class="col-md-4">
                    <div class="member member-anim text-center">
                        <figure class="member-media">
                            <img src="assets/images/team/fahad.jpg" alt="member photo">

                            <figcaption class="member-overlay">
                                <div class="member-overlay-content">
                                    <h3 class="member-title">Mr. Higeni Abdul Karim<span>Founder & CEO</span></h3><!-- End .member-title -->
                                    <p> Mr. Higeni Abdul Karim, the Founder and CEO of Ehsan Market, leads with a passion for serving the Muslim community. His commitment to quality and authenticity has made Ehsan Market a top destination for Islamic-inspired fashion and lifestyle products. With a focus on craftsmanship and Islamic principles, Mr. Karim's visionary leadership ensures the brand's success. Beyond business, he engages in philanthropy, reflecting a spirit of compassion and generosity.</p>
                                    <div class="social-icons social-icons-simple">
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .member-overlay-content -->
                            </figcaption><!-- End .member-overlay -->
                        </figure><!-- End .member-media -->
                        <div class="member-content">
                            <h3 class="member-title">Higenyi Abdul Karim Fahad<span>Founder, Programmer & CEO</span></h3><!-- End .member-title -->
                        </div><!-- End .member-content -->
                    </div><!-- End .member -->
                </div><!-- End .col-md-4 -->

                <div class="col-md-4">
                    <div class="member member-anim text-center">
                        <figure class="member-media">
                            <img src="assets/images/team/rayan.jpg" alt="member photo">

                            <figcaption class="member-overlay">
                                <div class="member-overlay-content">
                                    <h3 class="member-title">Mr. Ssemakula Rayan Muhammad<span>Sales & Marketing Manager</span></h3><!-- End .member-title -->
                                    <p>Introducing Mr. Rayan, our dynamic Sales & Marketing Manager at Ehsan Market. With his strategic mindset and exceptional communication skills, Rayan spearheads our efforts to connect with customers and drive business growth. With a keen understanding of market trends and consumer behavior, he crafts innovative marketing campaigns that resonate with our diverse audience. </p>
                                    <div class="social-icons social-icons-simple">
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .member-overlay-content -->
                            </figcaption><!-- End .member-overlay -->
                        </figure><!-- End .member-media -->
                        <div class="member-content">
                            <h3 class="member-title">Mr. Ssemakula Rayan Muhammad<span>Sales & Marketing Manager</span></h3><!-- End .member-title -->
                        </div><!-- End .member-content -->
                    </div><!-- End .member -->
                </div><!-- End .col-md-4 -->

                <div class="col-md-4">
                    <div class="member member-anim text-center">
                        <figure class="member-media">
                            <img src="assets/images/team/sheckat.jpg" alt="member photo">

                            <figcaption class="member-overlay">
                                <div class="member-overlay-content">
                                    <h3 class="member-title">Shekhat Hadijah<span>Product Manager</span></h3><!-- End .member-title -->
                                    <p>Meet Ms. Sheckat Hadijah, our dedicated Product Manager at Ehsan Market. With a passion for innovation and a meticulous attention to detail, Hadijah oversees the development and launch of our diverse range of products. Leveraging her expertise in trend analysis and customer insights,
                                        she ensures that every item in our collection meets the highest standards of quality and craftsmanship.</p>
                                    <div class="social-icons social-icons-simple">
                                        <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .member-overlay-content -->
                            </figcaption><!-- End .member-overlay -->
                        </figure><!-- End .member-media -->
                        <div class="member-content">
                            <h3 class="member-title">Shekhat Hadijah<span>Product Manager</span></h3><!-- End .member-title -->
                        </div><!-- End .member-content -->
                    </div><!-- End .member -->
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-2"></div><!-- End .mb-2 -->


    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection

@section('script')
<script type="text/javascript">

    document.addEventListener('DOMContentLoaded', function () {
        const scrollElements = document.querySelectorAll('.scroll-animation');

        function checkScroll() {
            scrollElements.forEach((el) => {
                const elementPosition = el.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                if (elementPosition < windowHeight - 150) {
                    el.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', checkScroll);
        checkScroll();
    });

</script>
@endsection
