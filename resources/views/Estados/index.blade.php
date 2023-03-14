<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>

    <script>
        $(document).ready(function(){
            $("#estados").on('change',function(){
                var id_estado = $(this).find(":selected").val();
            console.log(id_estado);
            if(id_estado == 0){
                $("#municipios").html('<option value="0"> --SELECCIONE UN ESTADO ANTES --- </option>');
            }
            else{
                $("#municipios").load('js_municipios?id_estado=' + id_estado);
            }
            });

        

        //-------------------- ESTUDIO SI/NO ---------------------------
        $('#estudia').change(function(){
            if ($(this).is(':checked')){
                
                $("#form_estudios").load('js_estudio');
            }
            else{
                $("#form_estudios").html('');
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
        <h1>FORMULARIO DINAMICO</h1>
        <hr>
        <form name="dinamicForm" action="{{ route('enviadatos')}}" method="POST">
            {{ csrf_field() }}

            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="matricula" placeholder="Ejemplo: 222110834" name="matricula">
                <label for="floatingInput">Matricula</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" placeholder="Ejemplo: Jair Josue" name="nombre">
                <label for="floatingInput">Nombre(s)</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="app" placeholder="Ejemplo: Heras Campos" name="app">
                <label for="floatingInput">Apellidos</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="fn" placeholder="Ejemplo: 26/10/03" name="fn">
                <label for="floatingInput">Fecha de Nacimiento</label>
            </div>
            <div class="mb-3" style="background: #FFF;
            padding-left:15px;
            border:var(--bs-border-width) solid var(--bs-border-color);
            border-radius:.375rem;"></div>
            <label for="exampleFormControlTextarea1" class="form-label">GENERO|SEXO</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gen" id="gen1" value="Femenino" checked>
                <label class="form-check-label" for="gen1">
                    Femenino
                </label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="gen" id="gen2" value="Masculino">
                <label class="form-check-label" for="gen2">
                    Masculino
                </label>
            </div> 
            <div class="form-floating">
        <select id="estados" name="id_estado" class="form-select" arial-label="Floating label select example">
            <option value="0"> SELECCIONA UN ESTADO </option>
            @foreach ($estados as $estado)
            <option value="{{ $estado->id_estado }}">{{ $estado ->nombre_e }}</option>
            @endforeach
        </select>
        <label for="floatingSelect">Lista de Estados</label>
            </div>
        <br>
        <div class="form-floating">
            <select id="municipios" name="id_municipio" class="form-select" arial-label="Floating label select example">
            <option value="0"> SELECCIONE UN ESTADO ANTES </option>
        </select>
        <label for="floatingSelect">Lista de Municipios</label>
        </div>
        <br>
        <div class="form-floating">
            <textarea class="form-control" name="direccion" id="direccion" placeholder="Ejemplo: Santa Maria Atarasquillo" cols="30" rows="10"></textarea>
            <label for="direccion">Direccion</label>
        </div>

        <hr><hr>

        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="estudia" name="estudia">
            <label for="estudia" class="form-check-label">Usted Estudia?</label>
        </div>

        <hr>
        <div id="form_estudios"></div>
        <hr><hr>
        <br><br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="submit" class="btn btn-primary btn-sm" value="enviar">
        </div>
    </form>
    </div>
</body>
</html>