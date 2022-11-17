<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="resources/css/style.css">

    <title>3.2 Estilos con Bootstrap</title>
</head>
<div class="principal">
        <div class="container p-5 my-5 bg-dark text white"><header>
            <img src="https://cdn-icons-png.flaticon.com/512/2459/2459778.png" width="200" height="200" >
        </header></div>

        <div class="container p-5 my-5 bg-primary text-white">
            <body>
                <p>Aquí se colocara la descripcón de las peliculas</p>
            </body>
        </div>

        <div class="container p-5 my-5" id="footer">
            <footer>
                <p><strong>Conceptualización de entornos de desarrollo de aplicaciones y servicios</strong></p>
                <p><strong>Alumno: Esaul Navarro</strong></p>
                <p><strong></strong></p>
                <p><a href="test@gmail.com">Mandar email</a></p>
            </footer>
        </div>
        <div class="container p-5 my-5 bg-dark text white">
            <p>Aqui se mostraran la lista de las peliculas</p>
        </div>
        <div class="container p-5 my-5 bg-dark text white">
            <p>Espacio para las peliculas.</p>
        </div>
        <div class="container p-5 my-5 bg-dark text white">
            <p>Espacio para las peliculas.</p>
        </div>
        <div class="container p-5 my-5 bg-dark text white">
            <p>Espacio para las peliculas.</p>
        </div>

</div>
</html>