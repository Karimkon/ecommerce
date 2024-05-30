@extends('layouts.app')

@section('content')
    <main class="main">
        <!-- Breadcrumb navigation -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $getPage->title }}</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <!-- Page header -->
        <div class="container">
            <div class="page-header page-header-big text-center" style="background-image: url('{{ $getPage->getImage() }} ')">
                <h1 class="page-title text-white">{{ $getPage->title }}<span class="text-white">keep in touch with us</span></h1>
            </div><!-- End .page-header -->
        </div><!-- End .container -->

        <!-- Page content -->
        <div class="page-content pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-2 mb-lg-0">
                        <h2 class="title mb-1">Contact Information</h2>
                        <p class="mb-3">{!! $getPage->description !!}</p>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="contact-info">
                                    <h3>Our Office</h3>

                                    <ul class="contact-list">
                                    @if(!empty($getSystemSettingApp->address))
                                        <li>
                                            <i class="icon-map-marker"></i>
                                            {{ $getSystemSettingApp->address }}
                                        </li>
                                        @endif
                                    @if(!empty($getSystemSettingApp->phone))
                                        <li>
                                            <i class="icon-phone"></i>
                                            <a href="tel{{ $getSystemSettingApp->phone }}">{{ $getSystemSettingApp->phone }}</a>
                                        </li>
                                    @endif

                                    @if(!empty($getSystemSettingApp->phone_two))
                                        <li>
                                            <i class="icon-phone"></i>
                                            <a href="tel:{{ $getSystemSettingApp->phone_two }}">{{ $getSystemSettingApp->phone_two }}</a>
                                        </li>
                                    @endif
                                    @if(!empty($getSystemSettingApp->submit_email))
                                        <li>
                                            <i class="icon-envelope"></i>
                                            <a href="mailto:#">{{ $getSystemSettingApp->submit_email }}</a>
                                        </li>
                                    @endif
                                    @if(!empty($getSystemSettingApp->email))
                                        <li>
                                            <i class="icon-envelope"></i>
                                            <a href="mailto:#">{{ $getSystemSettingApp->email }}</a>
                                        </li>
                                    @endif
                                    </ul><!-- End .contact-list -->
                                </div><!-- End .contact-info -->
                            </div><!-- End .col-sm-7 -->

                            <div class="col-sm-5">
                                <div class="contact-info">
                                    <h3>Office Hours</h3>

                                    <ul class="contact-list">
                                        <li>
                                            <i class="icon-globe"></i>
                                            <span class="text-dark">Open 24/7</span><br>Our online store is always open for shopping.
                                        </li>
                                        <li>
                                            <i class="icon-clock-o"></i>
                                            <span class="text-dark">Support Hours</span><br> {{ $getSystemSettingApp->working_hours }}
                                        </li>
                                        
                                    </ul><!-- End .contact-list -->

                                </div><!-- End .contact-info -->
                            </div><!-- End .col-sm-5 -->
                        </div><!-- End .row -->
                    </div><!-- End .col-lg-6 -->
                    <div class="col-lg-6">
                        <h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                        <p class="mb-2">Use the form below to get in touch with the sales team</p>
                        <div style="padding-top: 10px;padding-bottom: 10px;">
                        </div>

                        <form action="" class="contact-form mb-3" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="cname" class="sr-only">Name</label>
                                    <input type="text" class="form-control" name="name" id="cname" placeholder="Name *" required>
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label for="cemail" class="sr-only">Email</label>
                                    <input type="email" class="form-control" name="email" id="cemail" placeholder="Email *" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="cphone" class="sr-only">Phone</label>
                                    <input type="tel" class="form-control" name="phone" id="cphone" placeholder="Phone">
                                </div><!-- End .col-sm-6 -->

                                <div class="col-sm-6">
                                    <label for="csubject" class="sr-only">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="csubject" placeholder="Subject" required>
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->

                            <label for="cmessage" class="sr-only">Message</label>
                            <textarea class="form-control" name="message" cols="30" rows="4" id="cmessage" required placeholder="Message *"></textarea>

                            <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                                <span>SUBMIT</span>
                                <i class="icon-long-arrow-right"></i>
                            </button>
                        </form><!-- End .contact-form -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->

            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
@endsection

@section('script')

<script type="text/javascript">
        $(document).ready(function() {
            @if(session()->has('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: "{{ session('success') }}"
                });
            @endif

            @if(session()->has('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "{{ session('error') }}"
                });
            @endif

            @if(session()->has('warning'))
                Swal.fire({
                    icon: 'warning',
                    title: 'Warning',
                    text: "{{ session('warning') }}"
                });
            @endif

            @if(session()->has('info'))
                Swal.fire({
                    icon: 'info',
                    title: 'Info',
                    text: "{{ session('info') }}"
                });
            @endif
        });
    </script>
@endsection