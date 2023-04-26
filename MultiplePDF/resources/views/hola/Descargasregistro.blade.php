<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Navbar-Right-Links-icons.css') }}">
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
                        <a class="nav-link" href="{{ route('SignUp') }}"  style="width: 165.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                        font-weight: 500;
                        font-size: 18px; ">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="table-responsive">
        <table class="table table-hover text-center">
            <thead class="header-border">
                <tr>
                    <th class="align-middle txtHead">Nombre</th>
                    <th class="align-middle txtHead">Tamaño</th>
                    <th class="align-middle txtHead">Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="nameFiles">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                    <td>2 MB</td>
                    <td>
                        <button type="button" class="w-50 btn btn-primary btnDownload rounded-4">Descargar</button>
                    </td>
                </tr>
                <tr>
                    <td>Archivo 2</td>
                    <td>1.5 MB</td>
                    <td>
                        <button type="button" class="w-50 btn btn-primary btnDownload rounded-4">Descargar</button>
                    </td>
                </tr>
                <tr>
                    <td>Archivo 3</td>
                    <td>3 MB</td>
                    <td>
                        <button type="button" class="w-50 btn btn-primary btnDownload rounded-4">Descargar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>