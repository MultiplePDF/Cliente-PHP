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
                            <a class="nav-link active" href="{{ route('home') }}" style="width: 200.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                            font-weight: 500;
                            font-size: 18px; ">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cargar-archivo') }}"  style="width: 200.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                            font-weight: 500;
                            font-size: 18px; ">Convertir archivos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Archivos') }}"  style="width: 200.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                            font-weight: 500;
                            font-size: 18px; ">Mis archivos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Perfil') }}"  style="width: 170.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                            font-weight: 500;
                            font-size: 18px; ">Perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Sube los archivos que quieres convertir</h2>
                <p></p><img src="{{ asset('img/Tablet_login-pana.svg') }}">
                <h2 style="font-size: 15px;padding-bottom: 5px;">Arrastra y sube los archivos aqui</h2>
                <form action="{{route('cargar-archivo')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="archivo" class="form-label visually-hidden">Buscar Archivos</label>
                        <input type="file" name="archivo[]" id="archivo" class="form-control" multiple>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary">Convertir Archivos</button>
                    </div>
                </form>
                <form action="{{ route('cargar-archivo') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="links">Ingresa los links a convertir (separados por coma)</label>
                        <textarea class="form-control" id="links" name="links"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Convertir</button>
                </form>
                   
            </div>
        </div>
    </div>
