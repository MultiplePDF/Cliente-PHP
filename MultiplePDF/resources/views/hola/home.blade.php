<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:medium,semibold&display=swap" rel="stylesheet">



</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <span style="color: rgba(18, 17, 17);font-family: Montserrat, sans-serif;font-weight: 800;font-size: 24px;">MultiplePDF</span>
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2">...</button>

            <div id="navcol-2" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="" style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Como funciona?</a>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('SignIn') }}" style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('SignUp') }}" style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-4 py-xl-5">
        <div class="row-md">

            <div class="col-text">
                <div style="max-width: 350px;">
                    <h2 class="text-1"> 
                        Convierte tus
                        <br/>
                        archivos
                    </h2>
                    <p class="text-2"> 
                        Somos una pagina con la
                        <br/>
                        disponibilidad de convertir
                        <br/>
                        lotes de archivos a formato
                        <br/>
                        de pdf
                    </p>
                    <a class="btn btn-start rounded-pill shadow-lg" role="button" href="{{ route('SignIn') }}">Iniciar</a>
                </div>
            </div>

            <div class="col-img">
                <div class="p-xl-5 m-xl-5">
                    <img class="rounded img-fluiud w-100 fit-cover" src="{{ asset('img/img_inicio.svg') }}">
                    
                </div>
            </div>

        </div>
    </div>

</body>

</html>