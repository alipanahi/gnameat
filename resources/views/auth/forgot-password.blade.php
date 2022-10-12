<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            <img src="{{URL::asset('/images/register-logo.jpg')}}" alt="logo" style="margin:0 auto;" width="30%">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Hai dimenticato la password? Nessun problema. Facci sapere il tuo indirizzo e-mail e ti invieremo via e-mail un link per reimpostare la password che ti consentirà di sceglierne uno nuovo.') }}
        </div>

        <!-- Session Status -->
        @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                Abbiamo inviato via email il link per la reimpostazione della password!
                </div>
            @endif

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('invia il link per la reimpostazione della password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
