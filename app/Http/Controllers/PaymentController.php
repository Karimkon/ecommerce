<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\ProductSizeModel;
use App\Models\DiscountCodeModel;
use Cart;
use Illuminate\Support\Facades\Response;

class PaymentController extends Controller
{

    public function apply_discount_code(Request $request)
    {
        // Assuming 'discount_code' input is required and is a string
        $validated = $request->validate([
            'discount_code' => 'required|string',
        ]);

        // Attempt to retrieve the discount using the provided code
        $getDiscount = DiscountCodeModel::CheckDiscount($request->discount_code);

        // Initialize response data array
        $json = [];

        if (!empty($getDiscount)) {
            $total = Cart::getSubTotal(); // Retrieve subtotal from the cart
            if ($getDiscount->type == 'Amount') {
                // If discount is a fixed amount
                $discount = $getDiscount->percent_amount;
                $payable_total = $total - $discount;
            } else {
                // If discount is a percentage
                $discount = ($total * $getDiscount->percent_amount) / 100;
                $payable_total = $total - $discount;
            }

            // Populate response data
            $json['status'] = true;
            $json['discount'] = number_format($discount, 2);
            $json['payable_total'] = number_format($payable_total, 2);
            $json['message'] = "Discount applied successfully.";
        } else {
            // Populate response data for invalid discount code
            $json['status'] = false;
            $json['discount'] = '0.00';
            $json['payable_total'] = number_format(Cart::getSubTotal(), 2);
            $json['message'] = "The discount code you've entered is invalid.";
        }

        // Return a JSON response with the discount application result
        return response()->json($json);
    }
 

    public function checkout(Request $request)
    {
        $data['meta_title'] = 'Checkout';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';

        return view('payment.checkout', $data);
    }

    public function cart(Request $request)
    {
        $data['meta_title'] = 'Cart';
        $data['meta_description'] = '';
        $data['meta_keywords'] = '';

        return view('payment.cart', $data);
    }

    public function cart_delete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function add_to_cart(Request $request)
    {
        $getProduct = ProductModel::getSingle($request->product_id);
        $total = $getProduct->price;

        if (!empty($request->size_id)) {
            $size_id = $request->size_id;
            $getSize = ProductSizeModel::getSingle($size_id);

            $size_price = !empty($getSize->price) ? $getSize->price : 0;
            $total = $total + $size_price;
        } else {
            $size_id = 0;
        }

        $color_id = !empty($request->color_id) ? $request->color_id : 0;



        // Add the product to cart
       Cart::add([
            'id' => $getProduct->id,
            'name' => 'Product',
            'price' => $total,
            'quantity' => $request->qty,
            'attributes' => array(
                'size_id' => $size_id,
                'color_id' => $color_id,
            )
        ]);

        // You may want to return a response indicating success or failure
        return redirect()->back()->with('status', 'Item added to cart successfully');
    }

    public function update_cart(Request $request)
    {
        foreach($request->cart as $cart)
        {
        Cart::update($cart['id'], array(
            'quantity' => array(
                'relative' => false,
                'value' => $cart['qty']
            ),
          ));
        }
          return redirect()->back();
    }

}
