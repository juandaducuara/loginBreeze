<x-app-layout>
    <div class="container">
        <div class="mx-auto p-2" style="width: 25%;">
            <h1>Asignar Rol</h1>
        </div>

    <div class="card">
        <div class="card-header">
            <p>{{"{$user->nombre} {$user->apellido}"}}</p>
        </div>
        <div class="card-body">
            <h5>Lista de roles</h5>
                <form action="{{route('asignarRol.update',$user->id)}}" method="post">
                    @csrf
                    @method('put')
                    @foreach ($roles as $rol)
                    <div>
                        <input type="checkbox" name="roles[]" id="roles" value="{{$rol->id}}"{{$user->hasRole($rol->name) ? 'checked' : '' }}> 
                        {{$rol->name}}
                    </div>                
                    @endforeach
                    
                    <button type="submit" class="btn btn-success ">Asignar roles</button>
                </form>
            </div>
        </div> 
    </div>
</div>


</x-app-layout>