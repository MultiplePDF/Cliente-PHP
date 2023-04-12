<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function mostrarFormularioCarga()
    {
        return view('cargar-archivo');
    }

    public function cargarArchivo(Request $request)
{
    $archivos = $request->file('archivo');

    if (!isset($archivos) || count($archivos) == 0) {
        $mensaje = "No se seleccionó ningún archivo.";
        return view('cargar-archivo', compact('mensaje'));
    }

    foreach ($archivos as $archivo) {
        // Lógica para guardar cada archivo en el servidor
    }

    return view('cargar-archivo', ['archivos' => $archivos]);
}
} 