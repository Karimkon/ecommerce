@extends('layouts.app')

@section('content')
<main class="main">
        	<div class="page-header text-center" style="background-image: url('{{$getPage->getImage() }}')">
        		<div class="container">
        			<h1 class="page-title">{{$getPage->title }}<span></span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('blog') }}">Blog</a></li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">
                            <div class="entry-container max-col-2" data-layout="fitRows">
                                @foreach($getBlog as $value)
                                <div class="entry-item col-sm-6">'
                                    <article class="entry entry-grid">
                                        <figure class="entry-media">
                                            <a href="{{ url('blog/'.$value->slug) }}">
                                                <img src="{{ $value->getImage() }}" style="height: 300px; width:100%; object-fit: cover;" alt="{{ $value->title }}">
                                            </a>
                                        </figure><!-- End .entry-media -->

                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <span class="meta-separator">|</span>
                                                <a href="#">{{ date('M d, Y', strtotime($value->created_at)) }}</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">{{ $value->getCommentCount() }} Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="{{ url('blog/'.$value->slug) }}">{{ $value->title }}</a>
                                            </h2>

                                            @if(!empty($value->getCategory))
                                            <div class="entry-cats">
                                            <a href="{{ url('blog/category/'.$value->getCategory->slug)}}">In {{ $value->getCategory->name }}</a>
                                            </div>
                                            @endif


                                            <div class="entry-content">
                                                <p>{!! $value->short_description !!}</p>
                                                <a href="{{ url('blog/'.$value->slug) }}" class="read-more">Continue reading</a>
                                            </div>

                                        </div><!-- End .entry-body -->
                                    </article><!-- End .entry -->
                                </div><!-- End .entry-item -->
                                @endforeach

                            </div><!-- End .entry-container -->

                    {!! $getBlog->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
            
                		</div><!-- End .col-lg-9 -->

                		<aside class="col-lg-3">
                			@include('blog._sidebar')
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
@endsection

    @section('script')


    @endsection
