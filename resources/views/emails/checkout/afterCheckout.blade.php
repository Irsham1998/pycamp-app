@component('mail::message')
    # Register Camp: {{ $checkout->camps->title }}

    Yo bro/sis {{ $checkout->User->name }}
    <br>
    Terima kasih sudah daftar di <strong>{{ $checkout->camps->title }}</strong>, cek lagi instruksi pembayarannya

    @component('mail::button', ['url' => route('dashboard')])
        My Dashboard
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
