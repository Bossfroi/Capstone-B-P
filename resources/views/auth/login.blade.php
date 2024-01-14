<x-guest-layout>
    <x-authentication-card class="bg-yellow-100"> <!-- Apply yellow background color to the card -->
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" class="text-yellow-800" /> <!-- Apply yellow text color to the label -->
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-yellow-800" /> <!-- Apply yellow text color to the label -->
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" class="text-yellow-800" /> <!-- Apply yellow text color to the checkbox -->
                    <span class="ml-2 text-sm text-green-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-between mt-4">
                <a class="underline text-lg text-green-600 hover:text-yellow-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>

                <div class="flex items-center">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-yellow-600 hover:text-yellow-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-button class="ml-4 bg-orange-500 text-white">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </div>

        </form>
    </x-authentication-card>
</x-guest-layout>
