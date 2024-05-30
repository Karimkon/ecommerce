@component('mail::message')
Dear {{$user->name}},

We understand that forgetting passwords can be frustrating. No worries, we're here to help you regain access to your account.

If you requested a password reset, please click the button below to reset your password:

@component('mail::button', ['url' => url('reset/'.$user->remember_token)])
Reset Your Password
@endcomponent

If you did not request a password reset, you can safely ignore this email.

If you encounter any issues or need further assistance, please don't hesitate to contact our support team. We're always ready to assist you.

Best regards,

{{ config('app.name')}}
@endcomponent
