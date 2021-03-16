<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dann Esz | To Do List</title>
    <link rel="stylesheet" href="xstyle.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/logo_dann.png')}}" width="120" alt="" loading="lazy">
                <h7>| To Do List</h7>
            </a>
        </div>
    </nav>

</head>

<body>
    @yield('contenido')

</body>

<footer class="sticky_footer container-fluid bg-main">
    <div class="row justify-content-center pt-5">
        <div class="col-4 text-center pb-4">
            <h3>Location</h4>
                <p>México - CDMX </p>
        </div>
        <div class="col-4 text-center pb-4">
            <h3>Around the Web</h3>
            <a href="https://www.twitter.com/DnnEsz">
                <img src="{{asset('images/twitter.png')}}" class="img-fluid" width="40px" alt="twitter">
            </a>

            <a href="https://www.youtube.com/c/YouDevsOficial">
                <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube">
            </a>
        </div>
        <div class="col-4 text-center pb-4">
            <h3>About the Site</h3>
            <p>Una sencilla y personal aplicación web para controlar mis tareas diarias.
            </p>
        </div>
        <div class="col-12 pt-3 text-center" style="background-color: #1A252F;">
            <p>Ésta página y tu alma me pertenece PRRO!</p>
        </div>
    </div>
</footer>

</html>