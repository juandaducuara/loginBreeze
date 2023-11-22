<x-app-layout>
    <div class="container d-flex justify-content-center">
        <div class="col-md-8">

            <div class="row g-3 needs-validation">  
                <div class="col-md-4">
                  <label for="titulo" class="form-label">Titulo</label>
                  <label type="text" class="form-control" id="titulo">{{ $caso->titulo }} </label>                 
                </div>

                <div class="col-md-4">
                    <label for="descripcion_caso" class="form-label">Descripcion</label>
                    <textarea rows="5" type="text" class="form-control" id="descripcion_caso" disabled>{{ $caso->descripcion_caso }}</textarea>                  
                </div>

                <div class="col-md-4">
                  <label for="usuario_registra" class="form-label">Usuario solicitante</label>
                  <div class="input-group has-validation">                    
                    <label for="usuario_registra" class="form-label">Usuario</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">City</label>
                  <input type="text" class="form-control" id="validationCustom03" required>
                  
                </div>

                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">State</label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>                  
                </div>

                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="validationCustom05" required>
                  
                </div>

               

                
            </div>

            <h1>Registrar Caso de Mesa de Ayuda</h1>
            <form action="{{ route('casos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>        
                <div class="form-group">
                    <label for="usuario_registra">Usuario que Registra</label>
                    <input type="text" class="form-control" id="usuario_registra" name="usuario_registra" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            <a href="{{ route('casos.index') }}" class="btn btn-secondary mb-3">Regresar</a>

                
            </div>
        </div>
</x-app-layout>