<!DOCTYPE html>
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
                        <a class="nav-link" href="{{ route('Archivos') }}"  style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Mis archivos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Perfil') }}"  style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center container-card">
        <div class="row gx-2">
            <div class="col">
                <div class="p-1 card card-box">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <div class="profile-image mb-4">
                            <img src="~/images/imgprofile.jpg" alt="Imagen de perfil">
                        </div>
                        <span class="name mb-2" >Diego Arbeláez</span>
                        <span class="email" >diego.arbelaez.2015@upb.edu.co</span>

                        <div class="d-flex flex-column mb-2 btnProfile mb-4">
                            <a href="#" class="btn btn-primary btmProfileX d-flex flex-column justify-content-center align-items-center">Cambiar Nombre</a>
                        </div>
                        <div class="d-flex flex-column mb-2 btnProfile mb-4">
                            <a href="#" class="btn btn-primary btmProfileX d-flex flex-column justify-content-center align-items-center">Cambiar Correo</a>
                        </div>
                        <div class="d-flex flex-column mb-2 btnProfile mb-4">
                            <a href="#" class="btn btn-primary btmProfileX d-flex flex-column justify-content-center align-items-center">Cambiar Contraseña</a>
                        </div>
                        <div class="d-flex flex-column mb-2 btnProfile">
                            <a href="#" class="btn btn-primary btmProfileX d-flex flex-column justify-content-center align-items-center">Eliminar Cuenta</a>
                        </div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-primary btmProfileX d-flex flex-column justify-content-center align-items-center" type="submit">Cerrar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col w-50 m-4 d-flex flex-column justify-content-center align-items-center">
                <img src="~/images/profile.svg"  width="80%" alt="Imagen">
            </div>
        </div>
    </div>
</body>
</html>