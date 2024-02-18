<form action="{{ route('test_lar.update', $test_lar->id) }}" method="post"> 
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $test_lar->nombre }}" required>
    </div>
    <div class="form-group">
        <label for="body">Descripción</label>
        <textarea class="form-control" id="Descripcion" name="descripcion" rows="3" required>{{ $test_lar->descripcion }}</textarea>
    </div>
    <button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>
