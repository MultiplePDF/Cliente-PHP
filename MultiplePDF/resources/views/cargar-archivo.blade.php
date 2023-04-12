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
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span style="font-weight: bold;">MultiplePDF</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Mis Archivos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Perfil</a></li>
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
                <form action="{{ url('/cargar-archivo') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="archivo" class="form-label visually-hidden">Buscar Archivos</label>
                        <input type="file" name="archivo[]" id="archivo" class="form-control" multiple>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary">Convertir Archivos</button>
                    </div>
                </form>
                <h2 style="font-size: 15px;padding-top: 15px;padding-bottom: 0px;">O</h2>
                <h2 style="font-size: 15px;padding-top: 10px;padding-bottom: 10px;">Ingresa los links a convertir</h2><input type="url" style="padding-right: 10px;">
                <button class="btn btn-primary" type="button" style="background: #FF7764;--bs-body-bg: var(--bs-btn-disabled-color);padding-left: 10px;text-align: center;padding-right: 10px;padding-bottom: 0px;">></button>
            </div>
        </div>
    </div>
    
    @if(isset($archivos))
    <div>
        <h3>Archivos seleccionados:</h3>
        <ul>
            @foreach($archivos as $archivo)
                <li>{{ $archivo->getClientOriginalName() }} ({{ round($archivo->getSize() / 1024, 2) }} KB)</li>
            @endforeach
        </ul>
    </div>
@endif

    
