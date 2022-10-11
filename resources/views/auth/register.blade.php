<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="icon" type="image/x-icon" href="{{URL::asset('/images/favicon.ico')}}">
        <title>
            Registerati
        </title>
        <link href="{{URL::asset('/css/app.css')}}" rel="stylesheet">
        <!--
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        -->
    </head>
    <body>
        <div class="flex items-center justify-center min-h-screen" style="background-image:linear-gradient(90deg,#d18d25 0%,#923116 100%)">
            <div class="px-8 py-6 mx-4 mt-4 text-left shadow-lg md:w-1/2 lg:w-1/2sm:w-1/2" style="background-color:#e9e7d3;">
                <div class="flex justify-center">
                    <a href="{{route('/')}}">
                        <img src="{{URL::asset('/images/register-logo.png')}}" width="50%" style="margin:0 auto;">
                    </a>
                </div>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block" for="Name">Nome *<label>
                            <input type="text" placeholder="Nome" id="name" name="name" value="{{old('name')}}" required autofocus
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block" for="lastname">Cognome<label>
                                    <input type="text" placeholder="Cognome" id="lastname" name="lastname" value="{{old('lastname')}}"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block" for="email">Email *<label>
                                    <input type="text" placeholder="Email" id="email" name="email" value="{{old('email')}}" required
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block" for="phone">Telefono<label>
                                    <input type="text" placeholder="Telefono" id="phone" name="phone" value="{{old('phone')}}"
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block" for="instagram">Profilo Instagram *<label>
                            <a href="javascript:void();" title="utilizziamo il tuo profilo per informarti sui nostri nuovi articoli">
                                <svg style="display:inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                </svg>
                            </a>
                            <input type="text" placeholder="www.instagram.com/your_profile" id="instagram" name="instagram" value="{{old('instagram')}}" required
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block" for="facebook">Facebook *<label>
                                    <input type="text" placeholder="www.facebook.com/your_profile" id="facebook" name="facebook" value="{{old('facebook')}}" required
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block">Password *<label>
                                    <input type="password" placeholder="Password" id="password" name="password" required
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block">Conferma password *<label>
                                    <input type="password" placeholder="Conferma password" id="password_confirmation" name="password_confirmation" required
                                        class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                        </div>
                        
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <input id="terms" name="terms" type="checkbox" required value="yes" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Accetto i termini e le condizioni *</label>
                        </div>
                        <div class="flex flex-wrap w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <a class="underline text-sm" style="color:blue;" onMouseOver="this.style.color='#923116'" onMouseOut="this.style.color='blue'" href="{{URL::route('privacy')}}" target="_blank">Privacy Policy</a>
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <a class="underline text-sm" style="color:blue;" onMouseOver="this.style.color='#923116'" onMouseOut="this.style.color='blue'" href="{{URL::route('regolamento')}}" target="_blank">Regolamento</a>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            Già registrato?
                        </a>

                        <x-button class="ml-4">
                            Registerati
                        </x-button>
                    </div>
                    
                </form>
            </div>
        </div>
    </body>
</html>