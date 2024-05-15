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
            <h2 class="font-bold text-2xl text-[#209D5C]">Login</h2>
            <p class="text-[#209D5C]">Se você já é cliente, faça seu login facilmente</p>

            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
            @csrf
                <div>
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="">
                    <x-label for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
        </div>
            <!-- image -->
            <div class="md:block hidden w-1/2">
                <img class="rounded-2xl" src="img/aspar-login.png" alt="login">
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
