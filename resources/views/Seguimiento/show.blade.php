<x-app-layout>
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">

            <div class="row g-3 needs-validation">  
                <div class="col-md-4">
                  <label for="titulo" class="form-label"><strong>Titulo</strong></label>
                  <div class="input-group">                    
                    <label for="titulo" class="form-label">{{$caso->titulo}}</label>  
                  </div>                                                 
                </div>

                <div class="col-md-4">
                    <label for="fecha_registro" class="form-label"><strong>Fecha solicitud</strong></label>
                    <div class="input-group">                    
                      <label for="fecha_registro" class="form-label">{{$caso->fecha_registro}}</label>  
                    </div>
                </div>

                <div class="col-md-4">
                  <label for="usuario_registra" class="form-label"><strong>Usuario solicitante</strong></label>
                  <div class="input-group">                    
                    <label for="usuario_registra" class="form-label">{{$caso->usuario_registra}}</label>                   
                  </div>
                </div>

                <div class="col-md-8">
                  <label for="descripcion_caso" class="form-label"><strong>Descripcion</strong></label>
                  <div class="input-group">   
                    <p class="form-label" for="descripcion_caso">{!! nl2br(e($caso->descripcion_caso)) !!}</p>
                  </div>
                  
                </div>             

                <div class="col-md-4">
                  <label for="tipo_urgencia" class="form-label"><strong>Tipo de urgencia</strong></label>
                  <div class="input-group">                    
                    <label for="tipo_urgencia" class="form-label" style="text-transform: capitalize">{{$caso->tipo_urgencia}}</label>                  
                  </div>                  
                </div> 
                <div class="col-md-2">
                  <label for="estado" class="form-label"><strong>Estado</strong></label>
                  <div class="input-group">                    
                    <label for="estado" class="form-label" style="text-transform: capitalize">{{$caso->estado}}</label>                  
                  </div>                  
                </div>               
            </div>
            <div class="mx-auto p-2" style="width: 25%;">
              <h1><strong>Seguimientos del caso</strong></h1>
            </div>
            
            @foreach($seguimientos as $seguimiento)
            <div class="card mb-6" style="max-width: 100%;" >
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="public\Imagenes\logoaoa.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Titulo: {{$caso->titulo}}</h5>
                    <p class="card-text">Seguimiento: {{$seguimiento->seguimiento_caso}}</p>
                    <p class="card-text"><small class="text-body-secondary">Seguimiento subido : {{$seguimiento->created_at}}</small></p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          
            <div class="mx-auto p-2" style="width: 25%;">
              <h1><strong>Registrar observaciones caso de Mesa de Ayuda</strong></h1>
            </div>
            
            <form action="{{ route('seguimiento.store') }}" method="POST">
              
                @csrf                       
                <div class="form-group">
                    <label for="seguimiento_caso">Resolucion de caso</label>
                                    
                    <input type="hidden" name="id_caso" value='{{$caso->id}}'>
                    <textarea rows="5" type="text" class="form-control" name="seguimiento_caso" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            <a href="{{ route('casos.index') }}" class="btn btn-secondary mb-3">Regresar</a>

                
            </div>
        </div>
</x-app-layout>