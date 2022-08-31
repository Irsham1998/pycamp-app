@component('mail::message')
    # Welcome!

    Yo bro/sis {{ $user->name }}
    </br>
    Selamat datang bro/sis, akun kamu sudah ready nih. Buruan login, kepoin isinya wkwk

    @component('mail::button', ['url' => route('login')])
        Buruan klik aku
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
