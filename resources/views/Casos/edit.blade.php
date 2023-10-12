<x-app-layout>
<div class="container">
    <h1>Editar Caso de Mesa de Ayuda</h1>

    <form action="{{ route('casos.update', $caso->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $caso->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_registro">Fecha de Registro</label>
            <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" value="{{ $caso->fecha_registro }}" required>
        </div>
        <div class="form-group">
            <label for="usuario_registra">Usuario que Registra</label>
            <input type="text" class="form-control" id="usuario_registra" name="usuario_registra" value="{{ $caso->usuario_registra }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_solucion">Fecha de Solución (Opcional)</label>
            <input type="date" class="form-control" id="fecha_solucion" name="fecha_solucion" value="{{ $caso->fecha_solucion }}">
        </div>
        <div class="form-group">
            <label for="descripcion_caso">Descripción del Caso</label>
            <textarea class="form-control" id="descripcion_caso" name="descripcion_caso" rows="5" required>{{ $caso->descripcion_caso }}</textarea>
        </div>
        <div class="form-group">
            <label for="usuario_asignado">Usuario Asignado (Opcional)</label>
            <input type="text" class="form-control" id="usuario_asignado" name="usuario_asignado" value="{{ $caso->usuario_asignado }}">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="sin asignar" {{ $caso->estado == 'sin asignar' ? 'selected' : '' }}>Sin Asignar</option>
                <option value="asignado" {{ $caso->estado == 'asignado' ? 'selected' : '' }}>Asignado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="estado_caso">Estado del Caso</label>
            <select class="form-control" id="estado_caso" name="estado_caso" required>
                <option value="no iniciado" {{ $caso->estado_caso == 'no iniciado' ? 'selected' : '' }}>No Iniciado</option>
                <option value="en proceso" {{ $caso->estado_caso == 'en proceso' ? 'selected' : '' }}>En Proceso</option>
                <option value="completado" {{ $caso->estado_caso == 'completado' ? 'selected' : '' }}>Completado</option>
                <option value="anulado" {{ $caso->estado_caso == 'anulado' ? 'selected' : '' }}>Anulado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tipo_urgencia">Tipo de Urgencia</label>
            <select class="form-control" id="tipo_urgencia" name="tipo_urgencia" required>
                <option value="baja" {{ $caso->tipo_urgencia == 'baja' ? 'selected' : '' }}>Baja</option>
                <option value="media" {{ $caso->tipo_urgencia == 'media' ? 'selected' : '' }}>Media</option>
                <option value="alta" {{ $caso->tipo_urgencia == 'alta' ? 'selected' : '' }}>Alta</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
    <a href="{{ route('casos.index') }}" class="btn btn-secondary mb-3">Regresar</a>

</div>
</x-app-layout>