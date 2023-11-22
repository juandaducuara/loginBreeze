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
            <label for="usuario_registra">Usuario que Registra</label>
            <input type="text" class="form-control" id="usuario_registra" name="usuario_registra" required value="{{Auth::user()->nombre}} {{Auth::user()->apellido}}" disabled>
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
            <select name="usuario_asignado" id="usuario_asignado" class="form-control"> 
                <option value="">Seleccione una opcion</option>               
                @foreach ($users as $user)
                    <option value="{{ $user['id'] }}">{{$user['nombre']}} {{$user['apellido']}}</option>
                @endforeach
            </select>
        </div>



        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="Sin asignar">Sin Asignar</option>
                <option value="Asignado">Asignado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="estado_caso">Estado del Caso</label>
            <select class="form-control" id="estado_caso" name="estado_caso" required>
                <option value="No iniciado">No Iniciado</option>
                <option value="En proceso">En Proceso</option>
                <option value="Completado">Completado</option>
                <option value="Anulado">Anulado</option>
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