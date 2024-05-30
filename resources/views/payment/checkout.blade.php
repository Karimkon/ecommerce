@extends('layouts.app')
@section('style')
<style type="text/css">
.shipping-description-popup {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.9);
    border: 1px solid #ccc;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    max-width: 300px; /* Adjust as needed */
    text-align: center;
}


</style>
@endsection
@section('content')

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Checkout<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <center>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
</center>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div class="container">

                <form action="" id="SubmitForm" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>First Name *</label>
                                        <input type="text" value="{{ !empty(Auth::user()->name) ? Auth::user()->name : ''}}" name="first_name" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Last Name *</label>
                                        <input type="text" value="{{ !empty(Auth::user()->last_name) ? Auth::user()->last_name : ''}}" name="last_name" class="form-control">
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Company Name (Optional)</label>
                                <input type="text" value="{{ !empty(Auth::user()->company_name) ? Auth::user()->company_name : ''}}" name="company_name" class="form-control">

                                <label>Country *</label>
                                <input type="text" name="country" value="{{ !empty(Auth::user()->country) ? Auth::user()->country : ''}}" class="form-control">

                                <label>Street address *</label>
                                <input type="text" value="{{ !empty(Auth::user()->address_one) ? Auth::user()->address_one : ''}}" name="address_one" class="form-control" placeholder="House number and Street name">
                                <input type="text" value="{{ !empty(Auth::user()->address_two) ? Auth::user()->address_two : ''}}" name="address_two" class="form-control" placeholder="Appartments, suite, unit etc ...">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Town / City *</label>
                                        <input type="text" name="city" value="{{ !empty(Auth::user()->city) ? Auth::user()->city : ''}}" class="form-control">
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>State</label>
                                        <input type="text" name="state" value="{{ !empty(Auth::user()->state) ? Auth::user()->state : ''}}" class="form-control">
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Postcode / ZIP *</label>
                                        <input type="text" value="{{ !empty(Auth::user()->postcode) ? Auth::user()->postcode : ''}}" name="postcode" class="form-control">
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Phone *</label>
                                        <input type="tel" value="{{ !empty(Auth::user()->phone) ? Auth::user()->phone : ''}}" name="phone" class="form-control" required>
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <label>Email address *</label>
                                <input type="email" value="{{ !empty(Auth::user()->email) ? Auth::user()->email : ''}}" name="email" class="form-control" required>

                                @if(empty(Auth::check()))

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="is_create" class="custom-control-input CreateAccount" id="checkout-create-acc">
                                    <label class="custom-control-label" for="checkout-create-acc">Create an account?</label>
                                </div><!-- End .custom-checkbox -->

                                <div id="ShowPassword" style="display: none;">
                                    <label>Password *</label>
                                    <input type="text" id="inputPassword" name="password" class="form-control">
                                </div>
                                @endif

                                <label>Order notes (optional)</label>
                                <textarea class="form-control" name="note" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                        </div>
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach (Cart::getContent() as $key => $cart)


                                        @php
                                            $getCartProduct = App\Models\ProductModel::getSingle($cart->id);
                                        @endphp
                                        <tr>
                                            <td><a href="{{ $getCartProduct->slug }}">{{ $getCartProduct->title }}</a></td>
                                            <td>${{ number_format($cart->price * $cart->quantity, 2) }}</td>
                                        </tr>

                                    @endforeach

                                        <tr class="summary-subtotal">
                                            <td>Subtotal:</td>
                                            <td>${{ number_format(Cart::getSubTotal(), 2) }}</td>
                                        </tr><!-- End .summary-subtotal -->
                                        <tr>
                                            <td colspan="2">

                                                <div class="cart-discount">

                                                    <div class="input-group">
                                                        <input id="getDiscountCode" type="text" name="discount_code" class="form-control" placeholder="Discount code">
                                                        <div class="input-group-append">
                                                            <button id="ApplyDiscount" type="button" style="height:38px;" class="btn btn-outline-primary-2" type="submit"><i class="icon-long-arrow-right"></i></button>
                                                        </div>
                                                    </div>

                                            </div>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Discount:</td>
                                            <td>$ <span id="getDiscountAmount">0.00</span></td>
                                        </tr><!-- End .summary-subtotal -->

                                        <tr class="summary-shipping">
                                            <td>Shipping Packages:</td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        @foreach ($getShipping as $key => $shipping)
                                        <tr class="summary-shipping-row" @if($key > 1) style="display:none;" @endif>
                                            <td>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" value="{{$shipping->id}}" id="free-shipping{{$shipping->id}}" name="shipping"
                                                    required data-price="{{ !empty($shipping->price) ? $shipping->price : 0}}" class="custom-control-input getShippingCharge">
                                                    <label class="custom-control-label" for="free-shipping{{$shipping->id}}">{{$shipping->name}}</label>
                                                </div><!-- End .custom-control -->
                                            </td>
                                            <td>
                                                @if (!empty($shipping->price))
                                                    ${{ number_format($shipping->price, 2) }}
                                                @endif
                                                @if (!empty($shipping->description))
                                                    <div class="shipping-description" style="display: none;">{{ $shipping->description }}</div>
                                                @endif
                                            </td>
                                        </tr><!-- End .summary-shipping-row -->
                                    @endforeach

                <tr class="more-options">
                    <td colspan="2">
                        <button type="button" class="more-btn">More Options</button>
                    </td>
                </tr>

                                        <tr>
                                            <td>Shipping charge:</td>
                                            <td>$<span id="selectedShippingAmount">0.00</span></td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td> Total:</td>
                                            <td>$ <span id="getPayableTotal">{{ number_format(Cart::getSubTotal(), 2) }}</span></td>
                                        </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->
                                <input type="hidden" id="getShippingChargeTotal" value="0">
                                <input type="hidden" id="PayableTotal" value="{{ Cart::getSubTotal() }}">


                                <div class="accordion-summary" id="accordion-payment">

                                    <div class="custom-control custom-radio">
                                        <input type="radio" value="cash" id="Cashondelivery" name="payment_method" required class="custom-control-input">
                                        <label class="custom-control-label" for="Cashondelivery">Cash on delivery</label>
                                    </div>

                                    <div class="custom-control custom-radio" style="margin-top: 0px;">
                                        <input type="radio" value="paypal" id="Paypal" name="payment_method" required class="custom-control-input">
                                        <label class="custom-control-label" for="Paypal">Paypal</label>
                                    </div>

                                    <div class="custom-control custom-radio" style="margin-top: 0px;">
                                        <input type="radio" value="stripe" name="payment_method" id="CreditCard" required class="custom-control-input">
                                        <label class="custom-control-label" for="CreditCard">Stripe</label>
                                    </div>

                                </div><!-- End .accordion -->

                                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span class="btn-text">Place Order</span>
                                    <span class="btn-hover-text">Proceed to Checkout</span>
                                </button>
                                <br /> <br />
                                <img src="{{ url('assets/images/payments-summary.png') }}" alt="payments cards">
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </form>
            </div><!-- End .container -->
        </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

@endsection
@section('script')
<script src="{{ url('assets/js/jquery.min.js') }}"></script>

<script type="text/javascript">

    var discountApplied = false; // Flag to track if discount has been applied

    $(document).on('change', '.CreateAccount', function(){
        if(this.checked)
        {
            $('#ShowPassword').show();
            $('#inputPassword').prop('required',true);
        }
        else
        {
            $('#ShowPassword').hide();
            $('#inputPassword').prop('required',false);
        }

    });

    $(document).on('submit', '#SubmitForm', function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{ url('checkout/place_order') }}",
            data: new FormData(this),
            processData:false,
            contentType:false,
            dataType: "json",
            success: function(data){
                if(data.status == false)
                {
                    alert(data.message);
                }
                else
                {
                    window.location.href = data.redirect;
                }

            },
            error: function(data){

            }
        });
    });

    $(document).on('change', '.getShippingCharge', function(){
        var price = $(this).attr('data-price');
        var total = parseFloat($('#PayableTotal').val());
        var shippingTotal = parseFloat($('#getShippingChargeTotal').val());
        var discount = parseFloat($('#getDiscountAmount').html());
        $('#selectedShippingAmount').text(parseFloat(price).toFixed(2));


        var final_total = total - shippingTotal + parseFloat(price); // Calculate total by adding product price and shipping cost
        $('#getPayableTotal').html(final_total.toFixed(2));
    });

    $(document).on('click', '#ApplyDiscount', function(){
        if (discountApplied) {
            alert("Discount has already been applied.");
            return;
        }

        var discount_code = $('#getDiscountCode').val();

        $.ajax({
            type: "POST",
            url: "{{ url('checkout/apply_discount_code') }}",
            data: {
                discount_code : discount_code,
                "_token" : "{{ csrf_token() }}",
            },
            dataType: "json",
            success: function(data) {
                if(data.status == true) {
                    $('#getDiscountAmount').html(data.discount); // Update discount amount

                    var subtotal = parseFloat($('#PayableTotal').val());
                    var shippingTotal = parseFloat($('#getShippingChargeTotal').val());
                    var total = subtotal + shippingTotal; // Calculate total without discount
                    var final_total = total - data.discount; // Apply discount to total

                    $('#getPayableTotal').html(final_total.toFixed(2));
                    $('#PayableTotal').val(final_total.toFixed(2));

                    discountApplied = true; // Set flag to true indicating discount has been applied
                } else {
                    // Display error message for invalid discount code
                    alert(data.message);
                    // Optionally, you can clear the discount amount here if needed
                    $('#getDiscountAmount').html('0.00');
                }
            },
            error: function(data) {
                // Handle error
            }
        });
    });

    $(document).ready(function(){
        $(document).on({
            mouseenter: function () {
                var description = $(this).find('.shipping-description').html();
                $('<div class="shipping-description-popup">' + description + '</div>').appendTo('body').fadeIn();
            },
            mouseleave: function () {
                $('.shipping-description-popup').remove();
            }
        }, '.summary-shipping-row');

        $('.more-btn').click(function(e){
            e.preventDefault(); // Prevent default button behavior (form submission)

            var allOptionsDisplayed = $('.summary-shipping-row').length <= 3;

            if (allOptionsDisplayed) {
                // Change the text of the button to "Less Options"
                $(this).text("Less Options");
            }

            $('.summary-shipping-row:gt(2)').toggle(); // Show/hide additional shipping options beyond the third row

            // Toggle the text of the button
            $(this).text(function(i, text){
                return text === "More Options" ? "Less Options" : "More Options";
            });
        });
    });
</script>
@endsection
