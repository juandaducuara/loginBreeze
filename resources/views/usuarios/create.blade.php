<x-app-layout>
    <div class="container">
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">
            

    <h1>Registrar Usuario de Mesa de Ayuda</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div> 
            
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div> 

        <div class="form-group">
            <label for="usuario_asignado"></label>
            <select name="usuario_asignado" id="usuario_asignado" class="form-control"> 
                <option value="">Seleccione una opcion</option>               
                @foreach ($roles as $rol)
                    <option value="{{ $rol['id'] }}">{{$rol['name']}}</option>
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
</div>
</x-app-layout>