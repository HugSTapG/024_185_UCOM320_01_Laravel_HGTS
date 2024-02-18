<html>
    <body>
        <h1>Practica</h1>
        <a href="{{ route('test_lar.create') }}">Crear Nuevo</a>
        @foreach ($test_lars as $test_lar)
            <ul>
                <a href="{{ route('test_lar.show', $test_lar->id) }}">
                    <p><strong>{{$test_lar->nombre}}</strong></p>
                </a>
                <p>{{$test_lar->descripcion}}</p>
            </ul>
            <a href="{{ route('test_lar.edit',  $test_lar->id)}}"><button type="submit">Editar</button></a>
            <form action="{{ route('test_lar.destroy', $test_lar->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar</button>
            </form>
        @endforeach
    </body>
</html>