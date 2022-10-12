<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" type="image/x-icon" href="{{URL::asset('/images/favicon.ico')}}">
        <title>
            verifica email
        </title>
    </head>
    <body>
    <x-guest-layout>
        <x-auth-card class="flex items-center justify-center">
            <x-slot name="logo">
                <a href="/">
                    <img src="{{URL::asset('/images/register-logo.jpg')}}" alt="logo" width="30%" style="margin:0 auto;">
                </a>
            </x-slot>

            <div class="mb-4 text-sm text-gray-600">
                Grazie per esserti iscritto! Prima di iniziare, potresti verificare il tuo indirizzo email facendo clic sul link che ti abbiamo appena inviato? Se non hai ricevuto l'e-mail, saremo lieti di inviartene un'altra.
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                È stato inviato un nuovo link di verifica all'indirizzo e-mail fornito durante la registrazione.
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-button>
                        Invia nuovamente email di verifica
                        </x-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </x-auth-card>
    </x-guest-layout>
    </body>
</html>
