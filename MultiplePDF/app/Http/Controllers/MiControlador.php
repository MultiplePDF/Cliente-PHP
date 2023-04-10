<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//este controlador convierte archivos a base64 JSON
class MiControlador extends Controller
{
    public function imprimirJson()
    {
        $rutaArchivo = public_path('js/prueba.pdf');
        $contenidoArchivo = file_get_contents($rutaArchivo);
        $contenidoBase64 = base64_encode($contenidoArchivo);
        $extension = pathinfo($rutaArchivo, PATHINFO_BASENAME);
        $json = json_encode(['name:'=>$extension,'base64' => $contenidoBase64]);
        return response($json)->header('Content-Type', 'application/json');
    }
}
