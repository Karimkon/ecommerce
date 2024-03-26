@component('mail::message')
Hi **{{ $user->name }}**,

Thank you for placing an order with {{ config('app.name') }}!

Your order details:

@foreach($user->orders as $order)
- **Order ID:** {{ $order->id }}
- **Total Amount:** ${{ number_format($order->total_amount, 2) }}
@endforeach

If you have any questions or need assistance with your order, feel free to contact our support team.

Best regards,
{{ config('app.name') }} Team
@endcomponent
