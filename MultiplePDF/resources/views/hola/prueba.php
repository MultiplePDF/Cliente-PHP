$file_path = "D:\Documents\Nueva carpeta\LARAVEL\MultiplePDF\public\js\Epicureísmo.pdf";
$file_data = file_get_contents($file_path);
$encoded_data = base64_encode($file_data);
echo $encoded_data;