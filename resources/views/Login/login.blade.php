<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <center>
    <div class="container">
        <h1>Login: MultiUsuarios</h1>
        <hr>

        <form action="{{ route('validar') }}" method="GET">
            {{ csrf_field() }}
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="email" placeholder="Ejemplo: jaircampos468@gmail.com" name="email" value="{{ old('email')}}">
                <label for="floatingInput">E-Mail</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="password" id="password"class="form-control" placeholder="Ejemplo: utvt123" value="{{ old('password')}}">
                <label for="floatingInput">Contraseña</label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"></label>
                <input type="submit" class="btn btn-primary btn-sm" value="Ingresar" />
            </div>
        </form>
    </div>
    </center>
</body>
</html>