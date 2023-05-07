<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DescargaArchivos</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Navbar-Right-Links-icons.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:medium,semibold&display=swap" rel="stylesheet">


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
    <div class="table-responsive">
        @if (is_array($result->files))
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Nombre</th>
                            <th style="text-align: center;">Tamaño</th>
                            <th style="text-align: center;">Link</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach (($result->files) as $file)
                    <tr style="text-align: center;">
                        <td>{{ $file->fileName }}</td>
                        <td>
                        @if ($file->size < 1024)
                            {{ $file->size }} B
                        @elseif ($file->size < 1048576)
                            {{ round($file->size / 1024, 1) }} KB
                        @else
                            {{ round($file->size / 1048576, 2) }} MB
                        @endif
                        </td>
                        <td>
                            <a href="{{ $file->filePath }}" class="btn btn-primary" download>Descargar</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
        @else
            <p style="display: flex; justify-content: center;align-items: center; height: 100vh; font-size: 2em; text-align: center;">
                No se encontraron los archivos convertidos
            </p>
        @endif
    </div>

</body>