<x-app-layout>
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">
            

    <h1>Registrar Caso de Mesa de Ayuda</h1>
    <form action="{{ route('casos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="fecha_registro">Fecha de Registro</label>
            <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
        </div>
        <div class="form-group">
            <label for="usuario_registra">Usuario que Registra</label>
            <input type="text" class="form-control" id="usuario_registra" name="usuario_registra" required>
        </div>
        <div class="form-group">
            <label for="fecha_solucion">Fecha de Solución (Opcional)</label>
            <input type="date" class="form-control" id="fecha_solucion" name="fecha_solucion">
        </div>
        <div class="form-group">
            <label for="descripcion_caso">Descripción del Caso</label>
            <textarea class="form-control" id="descripcion_caso" name="descripcion_caso" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="usuario_asignado">Usuario Asignado (Opcional)</label>
            <input type="text" class="form-control" id="usuario_asignado" name="usuario_asignado">
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="sin asignar">Sin Asignar</option>
                <option value="asignado">Asignado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="estado_caso">Estado del Caso</label>
            <select class="form-control" id="estado_caso" name="estado_caso" required>
                <option value="no iniciado">No Iniciado</option>
                <option value="en proceso">En Proceso</option>
                <option value="completado">Completado</option>
                <option value="anulado">Anulado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tipo_urgencia">Tipo de Urgencia</label>
            <select class="form-control" id="tipo_urgencia" name="tipo_urgencia" required>
                <option value="baja">Baja</option>
                <option value="media">Media</option>
                <option value="alta">Alta</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    <a href="{{ route('casos.index') }}" class="btn btn-secondary mb-3">Regresar</a>

        
    </div>
</div>
</x-app-layout>