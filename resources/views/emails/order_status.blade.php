@component('mail::message')
# Order Status


Hello {{ $order->first_name }},

Thank you for your recent order. Below is the Status for your purchase:
** <b>Order Status </b>**
<strong>
@if($order->status == 0)
Pending
@elseif($order->status == 1)
In Progress
@elseif($order->status == 2)
Delivered
@elseif($order->status == 3)
Completed
@elseif($order->status == 4)
Cancelled
@endif
</strong>
<br>

**Order Number:** {{ $order->order_number }}

**Date of Purchase (D-M-YYYY):** {{ date('d-m-Y', strtotime($order->created_at)) }}

## Order Details

| Product       | Quantity | Total Price |
|---------------|----------|-------------|
@foreach ($order->getItem as $item)
| {{ $item->getProduct->title }} | {{ $item->quantity }} | ${{ number_format($item->total_price, 2) }} |
@endforeach

**Shipping:** ${{ $order->getShipping->name }}

**Shipping Amount:** ${{ number_format($order->shipping_amount, 2) }}

@if (!empty($order->discount_code))
**Discount Code:** {{ $order->discount_code }}

**Discount Amount:** ${{ number_format($order->discount_amount, 2) }}
@endif

**Total:** ${{ number_format($order->total_amount, 2) }}

Payment Method: {{ $order->payment_method }}

If you have any questions or concerns regarding your order, feel free to contact us at info@ehsanmarket.com.

Thank you for choosing our store!

Best regards,
{{ config('app.name') }} Team
@endcomponent
