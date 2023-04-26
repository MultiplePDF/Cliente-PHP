<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiControlador extends Controller
{
    public function cargarArchivo(Request $request)
    {
        $archivos_base64 = array(); // Inicializamos un array vacío para almacenar los archivos en base64
        $id_lote = ''; // Inicializamos la variable $id_lote

        // Procesamos los links ingresados
        if ($request->filled('links')) {
            $id_lote = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT);  // Generamos un ID único para todo el conjunto de archivos
            $links = explode(',', $request->input('links'));
            foreach ($links as $link) {
                // Descargamos el archivo PDF del link
                $contenidoArchivo = file_get_contents($link);

                // Convertimos el archivo a base64
                $contenidoBase64 = base64_encode($contenidoArchivo);

                // Calculamos el hash SHA256 del contenido del archivo
                $contenidoSHA256 = hash('sha256', $contenidoBase64);

                // Agregamos el archivo a nuestro array de archivos en base64
                array_push($archivos_base64, [
                    'id_lote' => $id_lote, // Agregamos el ID único para todo el conjunto de archivos
                    'nombre' => basename($link),
                    'tipo' => 'pdf',
                    'tamaño' => round(strlen($contenidoArchivo)/1024, 2), // Tamaño en KB
                    'base64' => $contenidoBase64,
                    'sha256' => $contenidoSHA256 // Agregamos el SHA256 al array
                ]);
            }
        }

        // Procesamos los archivos seleccionados
        if ($request->hasfile('archivo')) {
            $id_lote = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT); // Generamos un ID único de 5 dígitos numéricos para todo el conjunto de archivos
            foreach ($request->file('archivo') as $archivo) {
                $contenidoArchivo = file_get_contents($archivo);
                $contenidoBase64 = base64_encode($contenidoArchivo);
                $extension = pathinfo($archivo->getClientOriginalName(), PATHINFO_EXTENSION);

                // Calculamos el hash SHA256 del contenido del archivo
                $contenidoSHA256 = hash('sha256', $contenidoBase64);

                // Agregamos el archivo a nuestro array de archivos en base64
                array_push($archivos_base64, [
                    'id_lote' => $id_lote, // Agregamos el ID único para todo el conjunto de archivos
                    'nombre' => $archivo->getClientOriginalName(),
                    'tipo' => $extension,
                    'tamaño' => round($archivo->getSize()/1024, 2), // Tamaño en KB
                    'base64' => $contenidoBase64,
                    'sha256' => $contenidoSHA256 // Agregamos el SHA256 al array
                ]);
            }
        }

        // Almacenamos el array y el ID del lote en variables de sesión
        session(['archivos_base64' => $archivos_base64, 'id_lote' => $id_lote]);

        // Pasamos el array de archivos y el ID del lote a la vista
        return view('cargar-archivo', compact('archivos_base64', 'id_lote'));
    }
}

