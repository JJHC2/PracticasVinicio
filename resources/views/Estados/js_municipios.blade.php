<option value="0"> --SELECCIONE UN MUNICIPIO -- </option>
    @foreach ($municipios as $municipio)
        <option value="{{ $municipio->id_municipio }}">{{ $municipio->nombre }}</option>
    @endforeach