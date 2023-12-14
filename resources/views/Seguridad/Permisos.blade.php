<x-app-layout>
    <div class="container">
        <div class="mx-auto p-2" style="width: 25%;">
            <h1>Listado de permisos</h1>
        </div>
    <table class="table text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>                                
            </tr>            
        </thead>
        <tbody class="table-group-divider">
            @foreach($permisos as $permiso)
            <tr>
                <td>{{ $permiso->id }}</td>
                <td>{{ $permiso->name }}</td>                
                
                
            </tr>
            @endforeach
            
        </tbody>
    </table>

<div class="d-flex justify-content-center">
    {{ $permisos->links('vendor.pagination.bootstrap-4') }}
</div>
</div>


</x-app-layout>