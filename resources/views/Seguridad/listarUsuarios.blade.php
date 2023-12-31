<x-app-layout>
    <div class="container">
        <div class="mx-auto p-2" style="width: 25%;">
            <h1>Listado de Usuario y Roles</h1>
        </div>
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
    <table class="table text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>     
                <th>Permisos</th>                            
            </tr>            
        </thead>
        <tbody class="table-group-divider">
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->user }}</td>   
                <td>
                    <a href="{{ route('asignarRol.edit', $user->id) }}" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                      </svg>
                    </a>
                    
                </td>               
            </tr>
            @endforeach            
        </tbody>
    </table>

<div class="d-flex justify-content-center">
    
</div>
</div>


</x-app-layout>