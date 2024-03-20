 @component('mail::message')
 <p>Hi <b>{{ $user->name }}</b>, Assalam Alaikum Warahmatullahi Wabarakatuh 🙏 you are welcome to {{ config('app.name') }}! You're almost ready to start enjoying the benefits of Ehsan Market</p>

 <p>Simply click the button below to verify your email adddress</p>


 @component('mail::button', ['url' => url('activate/'.base64_encode($user->id))])
Verify
 @endcomponent

    Thank you for joining {{ config('app.name') }}. If you have any questions or need assistance, feel free to contact our support team.

    Best regards,
        {{ config('app.name') }} Team
@endcomponent
