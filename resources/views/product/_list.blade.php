<div class="products mb-3">
    <div class="row justify-content-center">
        @forelse ($getProduct as $value)
            @php
                $getProductImage = $value->getImageSingle($value->id);
            @endphp

            <div class="col-12 @if(!empty($is_home)) col-md-3 col-lg-3 @else col-md-4 col-lg-4 @endif">
                <div class="product product-7 text-center">
                    <figure class="product-media">
                        <a href="{{ url($value->slug) }}">
                            @if (!empty($getProductImage) && !empty($getProductImage->getLogo()))
                                <img style="width: 100%; height: auto; max-height: 280px; object-fit: cover;" src="{{ $getProductImage->getLogo() }}" alt="{{ $value->title }}" class="product-image">
                            @endif
                        </a>

                        <div class="product-action-vertical">
                            @if(!empty(Auth::check()))

                            <a href="javascript:;" id="{{ $value->id }}" data-toggle="modal" class="add_to_wishlist add_to_wishlist{{ $value->id }} btn-product-icon btn-wishlist btn-expandable {{ !empty($value->checkWishlist($value->id)) ? 'btn-wishlist-add' : ''}}"
                            title="Wishlist"><span>Add to Wishlist</span></a>

                           @else
                           <a href="#signin-modal" data-toggle="modal" class="btn-product-icon btn-wishlist btn-expandable"
                           title="Wishlist"><span>Add to Wishlist</span></a>
                           @endif

                        </div>
                    </figure>

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="{{ url($value->category_slug.'/'.$value->sub_category_slug) }}">{{ $value->sub_category_name }}</a>
                        </div>
                        <h3 class="product-title"><a href="{{ url($value->slug) }}">{{ $value->title }}</a></h3>
                        <div class="product-price">${{ number_format($value->price, 2) }}</div>
                        <!-- Add product ratings display here if available -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width:{{ $value->getReviewRating($value->id) }}%;"></div>
                            </div>
                            <a href="#product-review-link" class="ratings-text" id="review-link">( {{ $value->getTotalReview() }} Review / s)</a>
                        </div>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>No products found.</p>
            </div>
        @endforelse
    </div><!-- End .row -->
</div><!-- End .products -->
