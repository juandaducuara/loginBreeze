<x-app-layout>    
    <div class="container d-flex justify-content-center mt-3">
    <div class="col-md-8">           

    <h1 class="text-center">Registrar Usuario de Mesa de Ayuda</h1>
    <form action="{{ route('usuarios.store') }}" method="POST" class="mt-2">
        @csrf
        <div class="mt-2">
            <x-input-label for="nombre">Nombre</x-input-label>
            <x-text-input type="text" class="block mt-1 w-full" id="nombre" name="nombre" required autofocus/>
        </div> 
            
        <div class="mt-2">
            <label for="apellido">Apellido</label>
            <x-text-input  type="text" class="block mt-1 w-full" id="apellido" name="apellido" required />
        </div> 

        <div class="mt-2">
            <label for="rol_asignado">Rol</label>
            <select class="block mt-1 w-full" name="rol_asignado" id="rol_asignado" > 
                <option value="">Seleccione una opcion</option>               
                @foreach ($roles as $rol)
                    <option value="{{ $rol['id'] }}">{{$rol['name']}}</option>
                @endforeach
            </select>
        </div>
       <!-- User -->
        <div class="mt-2">
            <x-input-label for="user" :value="__('Usuario')" />
            <x-text-input id="user" class="block mt-1 w-full" type="text" name="user" :value="old('user')" required  autocomplete="user" />
            <x-input-error :messages="$errors->get('user')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-2">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <input id="estado" type="hidden" name="estado" value="Activo">   
        <x-primary-button class="mt-2">
            {{ __('Crear') }}
        </x-primary-button>
    </form>
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary ">Regresar</a>

</div>
    
</div>
</x-app-layout>