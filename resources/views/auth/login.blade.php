<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex justify-center">
        <h1 class="text-4xl">Connectez-vous</h1>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-center mt-6">
            <x-primary-button class="bg-[#FF6363] hover:bg-[#FF6363]">
                {{ __('ME CONNECTER') }}
            </x-primary-button>
        </div>

        <div class="flex items-center mt-4">
            @if (Route::has('password.request'))
                <p>Vous n'avez pas encore de compte ?</p>
                <a class="ml-2 text-[#FF6363] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                    {{ __('Inscrivez-vous') }}
                </a>
            @endif
        </div>

        <div class="flex items-center mt-2">
            @if (Route::has('password.request'))
                <a class="rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                </a>
            @endif
        </div>

    </form>
</x-guest-layout>
