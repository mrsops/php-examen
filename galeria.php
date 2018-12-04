<?php
/**
 * Created by PhpStorm.
 * User: mrsops
 * Date: 4/12/18
 * Time: 8:23
 */
require_once __DIR__. '/utils/utils.php';
require __DIR__ .'/utils/File.php';
require_once  __DIR__ . '/entity/ImagenGaleria.php';

$errores=[];
$descripcion='';
$mensaje='';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    try {


        $descripcion = trim(htmlspecialchars($_POST['descripcion']));

        $tiposAceptados=['image/jpeg', 'image/png', 'image/gif'];
        $imagen = new File('imagen', $tiposAceptados);
        $imagen->saveUploadFile(ImagenGaleria::RUTA_IMAGENES_GALLERY);
        $mensaje = 'Datos enviados';
    }catch (FileException $fileException){
        $errores[]=$fileException->getMessage();
    }
}

require 'views/galeria.view.php';
