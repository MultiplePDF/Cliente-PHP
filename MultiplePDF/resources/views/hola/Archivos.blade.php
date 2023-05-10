<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DescargaPaquetes</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Navbar-Right-Links-icons.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:medium,semibold&display=swap" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" style="color: rgba(18, 17, 17);font-family: Montserrat, sans-serif;font-weight: 800;font-size: 24px;">
                    <span>MultiplePDF</span>
                </a>
                <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navcol-2" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-auto">
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
                            <a class="nav-link" style="width: 170.92px;color: rgba(111, 103, 103);text-align: center;font-family: 'Montserrat', sans-serif;
                            font-weight: 500;
                            font-size: 18px; ">
                                <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                    <button style="margin-left: auto;margin-right: 0;" class="btn btn-primary btmProfileX d-flex flex-column justify-content-center align-items-center" type="submit">Cerrar Sesión</button>
                                </form>    
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <div class="table-responsive">
        @if (is_array(json_decode($result->batchesList)))
            <table class="table">
                <thead>
                    <tr>
                        <th style="text-align: center;">Transacción</th>
                        <th style="text-align: center;">Fecha</th>
                        <th style="text-align: center;"># de Archivos</th>
                        <th style="text-align: center;">Vigencia</th>
                        <th style="text-align: center;">Archivos</th>
                        <th style="text-align: center;">Link</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $counter = count(json_decode($result->batchesList));
                @endphp
                @foreach (array_reverse(json_decode($result->batchesList)) as $batch)
                <tr style="text-align: center;">
                    <td>{{ $counter }}</td>
                    <td>{{ date('d/m/Y H:i:s', strtotime($batch->createdAt)) }}</td>
                    <td>{{ $batch->numberFiles }}</td>
                    <td>{{ date('d/m/Y H:i:s', strtotime($batch->validity))  }}</td>
                    <td><a href="{{ route('Descargasregistro',['id'=>$batch->_id]) }}" class="btn btn-primary">Ver Archivos</a></td>

                    <td>
                        <a href="{{ $batch->batchPath }}" class="btn btn-primary" download>Descargar</a>
                    </td>
                </tr>
                @php
                    $counter--;
                @endphp
                @endforeach
                </tbody>
            </table>
        @else
            <p style="display: flex; justify-content: center;align-items: center; height: 100vh; font-size: 2em; text-align: center;">
                No se encontraron lotes de archivos convertidos
            </p>
        @endif
    </div>
    
</body>

</html>