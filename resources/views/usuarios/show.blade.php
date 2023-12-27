<x-app-layout>
    <div class="container">
        <h1 class="text-center mt-2">Detalles del Usuario</h1>
    
        <div class="card mt-2">
            <div class="card-header">
                <strong>ID:</strong> {{ $user->id }}
            </div>
            <div class="card-body">                
                <p class="card-text"><strong>Nombre:</strong> {{ $user->nombre }}</p>
                <p class="card-text"><strong>Apellido:</strong> {{ $user->apellido }}</p>
                <p class="card-text"><strong>Rol:</strong> {{ $user->rol}}</p>
                <p class="card-text"><strong>Estado usuario:</strong> {{ $user->estado}}</p>           
            </div>
            <div class="card-footer">
                <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </div>
    </x-app-layout>