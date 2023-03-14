<div id="resultado">
    <table id="lista" class="table table-hover">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">FOTO</th>
            <th scope="col">CLAVE</th>
            <th scope="col">USUARIO</th>
            <th scope="col">FN</th>
            <th scope="col">GENERO</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">ROL|TIPO|ACCESO</th>
            <th scope="col">ACTIVO</th>
            <th scope="col"></th>
        </tr>
        @foreach($usus as $usu)
        <tr id="{{ $usu->id }}">
            <td>{{$usu->id}}</td>
            <td><img src="{{$usu->imagen}}" width="40px" height="40px" /></td>
            <td>{{$usu->clave}}</td>
            <td>{{$usu->usuario}}</td>
            <td>{{$usu->fn}}</td>
            <td>{{$usu->gn}}</td>
            <td>{{$usu->email}}</td>
            <td>{{$usu->tipo}}</td>
            <td>{{$usu->activo}}</td>
            <td></td>
        </tr>
        @endforeach
    </table>
</div>