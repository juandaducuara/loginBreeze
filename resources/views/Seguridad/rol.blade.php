<x-app-layout>
    <div class="container">
        <div class="mx-auto p-2" style="width: 25%;">
            <h1>Listado de roles</h1>
        </div>
    <table class="table text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>     
                <th>Permisos</th>                            
            </tr>            
        </thead>
        <tbody class="table-group-divider">
            @foreach($roles as $rol)
            <tr>
                <td>{{ $rol->id }}</td>
                <td>{{ $rol->name }}</td>   
                <td>
                    @foreach ($rol->permissions as $permission)
                        <span>{{$permission->name}}  </span>
                    @endforeach
                    
                </td>               
            </tr>
            @endforeach            
        </tbody>
    </table>

<div class="d-flex justify-content-center">
    {{ $roles->links('vendor.pagination.bootstrap-4') }}
</div>
</div>


</x-app-layout>