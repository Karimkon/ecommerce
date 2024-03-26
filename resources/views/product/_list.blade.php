<div class="products mb-3">
    <div class="row justify-content-center">
        @forelse ($getProduct as $value)
            @php
                $getProductImage = $value->getImageSingle($value->id);
            @endphp

            <div class="col-12 col-md-4 col-lg-4">
                <div class="product product-7 text-center">
                    <figure class="product-media">
                        <a href="{{ url($value->slug) }}">
                            @if (!empty($getProductImage) && !empty($getProductImage->getLogo()))
                                <img style="width: 100%; height: auto; max-height: 280px; object-fit: cover;" src="{{ $getProductImage->getLogo() }}" alt="{{ $value->title }}" class="product-image">
                            @endif
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        </div>
                    </figure>

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="{{ url($value->category_slug.'/'.$value->sub_category_slug) }}">{{ $value->sub_category_name }}</a>
                        </div>
                        <h3 class="product-title"><a href="{{ url($value->slug) }}">{{ $value->title }}</a></h3>
                        <div class="product-price">${{ number_format($value->price, 2) }}</div>
                        <!-- Add product ratings display here if available -->
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
