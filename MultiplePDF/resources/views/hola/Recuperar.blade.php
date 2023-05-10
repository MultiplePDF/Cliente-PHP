<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Recuperar Contraseña</title>
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
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <span style="color: rgba(18, 17, 17);font-family: Montserrat, sans-serif;font-weight: 800;font-size: 24px;">MultiplePDF</span>
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2">...</button>

            <div id="navcol-2" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('SignIn') }}"  style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Inciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('SignUp') }}"  style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section class="py-4 py-xl-5">
                    <div class="container">
                        <div class="row mb-2">
                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                <h2 class="display-6 fw-bold" style="font-family: 'Montserrat', sans-serif;
                                font-weight: 600;">Recuperar contraseña</h2>
                                <p class="text-muted"></p>
                            </div>
                        </div>
                        <form class="d-flex justify-content-center flex-wrap" method="POST" style="height: 200px;">
                            @csrf
                            <div class="mb-3">
                                <input class="form-control" type="email" name="email" placeholder="Correo electrónico" style="margin-left: 20px;border:1px solid #ced4da !important;">
                                <label class="form-label" style="padding: 20px;text-align: left;font-family: 'Montserrat', sans-serif;
                                font-weight: 500;">
                                    le llegara a su correo una URL para 
                                    <br>
                                    cambiar su contraseña
                                    <br>
                                </label>
                            </div>
                            <div class="mb-3">
                                <button class="btn ms-2" type="submit" style="background: #FF7764;color: #FBF3F3;font-family: 'Montserrat', sans-serif;
                                font-weight: 500;">Enviar</button></div>
                        </form>
                        @if (isset($error))
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endif
                    </div>
                </section><label class="form-label"></label>
            </div>
            <div class="col-md-6"><img src="{{ asset('img/Tablet_login-pana.svg') }}"></div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   


</body>

</html>