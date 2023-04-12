<form method="POST" action="/cargar-archivo" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="archivo">Seleccionar archivos:</label>
        <input type="file" name="archivo[]" id="archivo" multiple>
    </div>
    <div>
        <button type="submit">Cargar archivos</button>
    </div>
</form>

@if(isset($archivos))
    <div>
        <h3>Archivos seleccionados:</h3>
        <ul>
            @foreach($archivos as $archivo)
                <li>{{ $archivo->getClientOriginalName() }}</li>
            @endforeach
        </ul>
    </div>
@endif