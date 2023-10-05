<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="nombre" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
        </div>
        <!-- Apellido -->
        <div>
            <x-input-label for="name" :value="__('Apellido')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="apellido" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
        </div>
        <!-- User -->
        <div>
            <x-input-label for="name" :value="__('Usuario')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="user" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('user')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- Tipo usuario -->
        <div>
            <x-input-label for="name" :value="__('Tipo usuario')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="tipo_usuario" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('tipo_usuaro')" class="mt-2" />
        </div>
        <!-- Estado -->
        <div>
            <x-input-label for="name" :value="__('Estado')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="estado" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
