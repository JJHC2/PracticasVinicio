<!DOCTYPE html>
<html lang="en">
<style>
.mi-clase-de-titulo {
  font-family: 'cursive';
}

</style>
<head>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-48hiAE0gAa8JHaWZ+gH9G0c+5N5cl2vf5MkF6Jh7nU/0eUd/6U22H6APuc9J4LaNGqVLjyVnwDCatfUx7kSjDg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel|DSM53</title>
</head>
<body>
    <center>
    <div class="container">
        <h1>Login-Seccion|Nivel: Admin</h1>
        <hr>
        <h1>BIENVENIDO</h1>
        <img src="https://images.pexels.com/photos/302820/pexels-photo-302820.jpeg?cs=srgb&dl=pexels-pixabay-302820.jpg&fm=jpg" 
        alt="Sin foto" width="600px" class="animate__animated animate__backInDown">
        <hr>
        <br>
        <a class="btn btn-danger" href="{{ route('logout')}}">Salir del sistema</a>
        <br>
        <br>
    </div>
</center>
</body>

{{-- ALERTA --}}
<script type="text/javascript">
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Bienvenido',
  showConfirmButton: false,
  timer: 1500,
  customClass: {
    title: 'mi-clase-de-titulo'
  }
})
  </script>   
  </html>