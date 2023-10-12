<x-app-layout>
<div class="container">
    <h1>Detalles del Caso</h1>

    <div class="card">
        <div class="card-header">
            <strong>ID:</strong> {{ $caso->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $caso->titulo }}</h5>
            <p class="card-text"><strong>Fecha de Registro:</strong> {{ $caso->fecha_registro }}</p>
            <p class="card-text"><strong>Usuario que Registra:</strong> {{ $caso->usuario_registra }}</p>
            <p class="card-text"><strong>Fecha de Solución:</strong> {{ $caso->fecha_solucion }}</p>
            <p class="card-text"><strong>Descripción del Caso:</strong> {{ $caso->descripcion_caso }}</p>
            <p class="card-text"><strong>Usuario Asignado:</strong> {{ $caso->usuario_asignado }}</p>
            <p class="card-text"><strong>Estado:</strong> {{ $caso->estado }}</p>
            <p class="card-text"><strong>Estado del Caso:</strong> {{ $caso->estado_caso }}</p>
            <p class="card-text"><strong>Tipo de Urgencia:</strong> {{ $caso->tipo_urgencia }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('casos.index') }}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
</div>
</x-app-layout>