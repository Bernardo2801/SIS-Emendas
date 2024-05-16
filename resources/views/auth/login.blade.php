<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <!-- form -->
        <div class="md:w-1/2 px-16">
            <div class="mb-4">
                <a href="{{ route('welcome') }}" class="text-[#17693e] font-semibold text-sm border border-transparent rounded-xl text-center inline-flex items-center me-2 uppercase hover:scale-105 transition ease-in-out duration-300"><ion-icon name="arrow-back" class="text-[26px] mr-2"></ion-icon>Voltar</a>
            </div>
            <h2 class="font-bold text-2xl text-[#209D5C]">Login</h2>
            <p class="text-[#209D5C]">Se você já é cliente, faça seu login facilmente</p>

            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
            @csrf
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div>
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <x-button class="mt-2">
                    {{ __('Log in') }}
                </x-button>
            </form>

            <div class="mt-10 grid grid-cols-3 items-center text-gray-500">
                <hr class="border-gray-400">
                <p class="text-center text-sm">OU</p>
                <hr class="border-gray-400">
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-[#209D5C] hover:text-[#17693e] rounded-md focus:outline-none transition ease-in-out duration-300 hover:scale-105" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>
            <!-- image -->
            <div class="md:block hidden w-1/2 transition ease-in-out duration-300 hover:scale-105">
                <img class="rounded-2xl" src="img/aspar-login.png" alt="login">
            </div>
    </x-authentication-card>
</x-guest-layout>
