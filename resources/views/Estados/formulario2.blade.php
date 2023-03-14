<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("#busca").keyup(function(){
                $busca = $(this).val();
                $contar = $busca.length;
                if($contar >= 3){
                    $("#resultado").load('js_buscar?busca=' + $busca);
                }else{
                    $("#resultado").load('js_defecto');
                }
            });
        });
    </script>
    <style>
        body{
            background: #EEF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buscar Info</h1>
        <hr>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Ejemplo: Roberto" name="busca" id="busca">
            <label for="floatingInput">Buscar Registro</label>
        </div>
        <hr><hr>
        <h1>Lista De Usuarios</h1>
        <div id="resultado">
            <table id="lista" class="table table-hover">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Clave</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">FN</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Activo</th>
                    <th scope="col"></th>
                </tr>
                @foreach($usus as $usu)
                <tr id="{{ $usu->id }}">
                    <td>{{$usu->id}}</td>
                    <td><img src="{{$usu->imagen}}" width="40px" height="40px" /></td>
                    <td>{{$usu->clave}}</td>
                    <td>{{$usu->usuario}}</td>
                    <td>{{$usu->gn}}</td>
                    <td>{{$usu->email}}</td>
                    <td>{{$usu->tipo}}</td>
                    <td>{{$usu->activo}}</td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>