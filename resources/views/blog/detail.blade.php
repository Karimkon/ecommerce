@extends('layouts.app')

@section('content')

<main class="main">
    <div class="page-header text-center" style="background-image: url('{{ $getBlog->getImage() }}')">
        <div class="container">
            <h1 class="page-title">{{ $getBlog->title }}</h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            @include('admin.layouts._message')

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('blog') }}">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $getBlog->title }}</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <article class="entry single-entry">
                        <figure class="entry-media">
                            <img src="{{ $getBlog->getImage() }}" alt="{{ $getBlog->title }}">
                        </figure><!-- End .entry-media -->

                        <div class="entry-body">
                            <div class="entry-meta">
                                <a href="#">{{ date('M d, Y', strtotime($getBlog->created_at)) }}</a>
                                <span class="meta-separator">|</span>
                                <a href="#">{{ $getBlog->getCommentCount() }} Comments</a>
                                @if(!empty($getBlog->getCategory))
                                <span class="meta-separator">|</span>
                                <a href="{{ url('blog/category/' . $getBlog->getCategory->slug) }}">{{ $getBlog->getCategory->name }}</a>
                                @endif
                            </div><!-- End .entry-meta -->
                            <br />
                            <div class="entry-content editor-content">
                                {!! $getBlog->description !!}
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->

                    @if(!empty($getRelatedPost->count()))
                    <div class="related-posts">
                        <h3 class="title">Related Posts</h3><!-- End .title -->

                        <div class="owl-carousel owl-simple" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":1
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    }
                                }
                            }'>
                            @foreach($getRelatedPost as $relatedblog)
                            <article class="entry entry-grid">
                                <figure class="entry-media">
                                    <a href="{{ url('blog/' . $relatedblog->slug) }}">
                                        <img src="{{ $relatedblog->getImage() }}" alt="{{ $relatedblog->title }}">
                                    </a>
                                </figure><!-- End .entry-media -->

                                <div class="entry-body">
                                    <div class="entry-meta">
                                        <a href="#">{{ date('M d, Y', strtotime($relatedblog->created_at)) }} </a>
                                        <span class="meta-separator">|</span>
                                        <a href="#">{{ $relatedblog->getCommentCount() }} Comments</a>
                                    </div><!-- End .entry-meta -->

                                    <h2 class="entry-title">
                                        <a href="{{ url('blog/' . $relatedblog->slug) }}">{{ $relatedblog->title }}.</a>
                                    </h2><!-- End .entry-title -->

                                    @if(!empty($relatedblog->getCategory))
                                    <div class="entry-cats">
                                        <a href="{{ url('blog/category/' . $relatedblog->getCategory->slug) }}">{{ $relatedblog->getCategory->name }}</a>
                                    </div>
                                    @endif
                                </div><!-- End .entry-body -->
                            </article><!-- End .entry -->
                            @endforeach
                        </div><!-- End .owl-carousel -->
                    </div><!-- End .related-posts -->
                    @endif

                    <div class="comments">
                        <h3 class="title">{{ $getBlog->getCommentCount() }} Comments</h3><!-- End .title -->

                        <ul>
                            @foreach($getBlog->getComment as $comment)
                            <li>
                                <div class="comment">
                                    <div class="comment-body">
                                        <div class="comment-user">
                                            <h4><a href="#">{{ $comment->getUser->name }}</a></h4>
                                            <span class="comment-date">{{ date('M d, Y', strtotime($comment->created_at)) }} - {{ date('h:i A', strtotime($comment->created_at)) }}</span>
                                        </div>

                                        <div class="comment-content">
                                            <p>{{ $comment->comment }}. </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div><!-- End .comments -->

                    <div class="reply">
                        <div class="heading">
                            <h3 class="title">Leave A Comment</h3>
                        </div><!-- End .heading -->

                        <form action="{{ url('blog/submit_comment') }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="blog_id" value="{{ $getBlog->id }}">
                            <label for="reply-message" class="sr-only">Comment</label>
                            <textarea name="comment" id="reply-message" cols="30" rows="4" class="form-control" required placeholder="Comment *"></textarea>
                            @if(!empty(Auth::check()))
                            <button type="submit" class="btn btn-outline-primary-2">
                                <span>POST COMMENT</span>
                                <i class="icon-long-arrow-right"></i>
                            </button>
                            @else
                            <a href="#signin-modal" data-toggle="modal" class="btn btn-outline-primary-2">
                                <span>POST COMMENT</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                            @endif
                        </form>
                    </div><!-- End .reply -->
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
