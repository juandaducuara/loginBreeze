<x-app-layout>
<div class="container">
    <h1>Listado de Casos de Mesa de Ayuda</h1>
    <a href="{{ route('casos.create') }}" class="btn btn-success mb-3">Crear Nuevo Caso</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Fecha de Registro</th>
                <th>Usuario que Registra</th>
                <th>Estado</th>
                <th>Estado del Caso</th>
                <th>Tipo de Urgencia</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($casos as $caso)
            <tr>
                <td>{{ $caso->id }}</td>
                <td>{{ $caso->titulo }}</td>
                <td>{{ $caso->fecha_registro }}</td>
                <td>{{ $caso->usuario_registra }}</td>
                <td>{{ $caso->estado }}</td>
                <td>{{ $caso->estado_caso }}</td>
                <td>{{ $caso->tipo_urgencia }}</td>
                <td>
                    <a href="{{ route('casos.show', $caso->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('casos.edit', $caso->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('casos.destroy', $caso->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</x-app-layout>