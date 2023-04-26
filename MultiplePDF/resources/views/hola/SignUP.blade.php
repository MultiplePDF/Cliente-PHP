<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Navbar-Right-Links-icons.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:medium,semibold&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" style="color: rgba(18, 17, 17);font-family: Montserrat, sans-serif;font-weight: 800;font-size: 24px;" href="{{ route('home') }}">
                <span>MultiplePDF</span>
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navcol-2" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}" style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Inicio</a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('SignIn') }}" style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section class="py-4 py-xl-5" style="height: 500px;">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h2 class="mb-4" style="font-family: 'Montserrat', sans-serif;
                                font-weight: 600; /* semibold */;">Bienvenido</h2>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-6 col-xl-4" style="width: 450px;height: 500pxpx;">
                                <form class="text-center d-flex flex-column justify-content-between" action="{{route('SignUp')}}" method="POST">
                                    
                                    @csrf
                                    
                                    <div class="mb-3">
                                        <label class="form-label" style="font-family: 'Montserrat', sans-serif;
                                        font-weight: 600; /* semibold */;margin-left: 0px;margin-right: 340px; width: 170px;">Nombre y apellido</label>
                                        <input class="form-control rounded-pill shadow" type="name" name="name"  style="width: 391px;height: 42px;text-align: center;">
                                    </div>
                                        
                                    
                                    <div class="mb-3">
                                        <label class="form-label" style="font-family: 'Montserrat', sans-serif;
                                        font-weight: 600; /* semibold */;margin-left: 0px;margin-right: 340px; width: 170px;">Correo electrónico</label>
                                        <input class="form-control rounded-pill shadow" type="email" name="email"  style="width: 391px;height: 42px;text-align: center;"></div>
                                        
                                    <div class="mb-3">
                                        <label class="form-label" style="font-family: 'Montserrat', sans-serif;
                                        font-weight: 600; /* semibold */;margin-left: -30px;margin-right: 340px; width: 170px;">Contraseña</label>
                                        <input class="form-control rounded-pill shadow" type="password" name="password"  style="width: 391px;height: 42px;text-align: center;"></div>
                                        
                                    <div class="mb-3">
                                        <label class="form-label" style="font-family: 'Montserrat', sans-serif;
                                        font-weight: 600; /* semibold */;margin-left: 0px;margin-right: 340px; width: 170px;">Repetir Contraseña</label>
                                        <input class="form-control rounded-pill shadow" type="password" name="confirm_password" style="width: 391px;height: 42px;text-align: center;"></div>
                                    
                                    <br>
                                    <button class="btn btn-SignIn rounded-pill shadow-lg" type="submit" style="color: rgb(33, 37, 41);font-family: 'Montserrat', sans-serif;
                                    font-weight: 500; /* semibold */">Registrarse</button>
                                    
                                    <br>
                                    <br>
                                    <a class="btn-nowSignUp d-block w-100" type="submit">
                                        <label style="color: rgb(33, 37, 41);font-family: 'Montserrat', sans-serif;
                                        font-weight: 500; /* semibold */">¿No tienes una cuenta?</label>
                                        <br>
                                        <a class="nav-link" href="{{ route('SignIn') }}" style="color: rgb(33, 37, 41);font-family: 'Montserrat', sans-serif;
                                        font-weight: 500; /* semibold */">Iniciar Sesión</a>
                                        <br>
                                        <br>
                                    </a>

                                    <p class="text-muted"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-6">
                <img width="500" height="500"  src="{{ asset('img/img_inicio.svg') }}" style="height: 400px;padding: 0px;margin: 0px;margin-top: 50px;">
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
