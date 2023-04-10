<?php
    //echo $_FILES["files"]["name"]
    $directorio ="uploads/";
    $archivo = $directorio.basename($_FILES["files"]["name"]);
    $tipoArchivo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION));
    echo $tipoArchivo;
?>