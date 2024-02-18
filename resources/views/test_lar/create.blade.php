<html>
    <body>
        <h1>Crear Nuevo Registro</h1>

        <form action="{{ route('test_lar.store') }}" method="post"> 
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
        
    </body>
</html>
