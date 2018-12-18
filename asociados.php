<?php
/**
 * Created by PhpStorm.
 * User: mrsops
 * Date: 18/12/18
 * Time: 8:22
 */

require_once __DIR__ . '/utils/utils.php';
require __DIR__ . '/utils/File.php';
require_once __DIR__ . '/entity/Asociado.php';
require_once __DIR__ . '/database/QueryBuilder.php';
require_once __DIR__ . '/database/Connection.php';
require_once __DIR__ . '/exception/QueryException.php';
require_once __DIR__. '/core/App.php';
require_once __DIR__. '/repository/AsociadoRepository.php';
$errores=[];
$descripcion='';
$mensaje='';


try{
    $config=require_once 'app/config.php';
    App::bind('config', $config);
    $asociadoRepository = new AsociadoRepository();
    if($_SERVER['REQUEST_METHOD' ]==='POST'){
        $nombre=$_POST['nombre'];
        $descripcion=trim(htmlspecialchars($_POST['descripcion']));

        $tiposAceptados=['image/jpeg', 'image/png', 'image/gif'];
        $logo=new File('logo', $tiposAceptados);
        $logo->saveUploadFile(Asociado::RUTA_LOGO);
        $logo->copyFile(Asociado::RUTA_LOGO, Asociado::RUTA_PORTFOLIO);
        $asociado = new Asociado($nombre, $logo->getFileName(), $descripcion);
        $asociadoRepository->save($asociado);
        $mensaje='Se ha guardado el asociado en la BDA';
        $descripcion='';
    }
    $asociadoRepository = new AsociadoRepository();
    $asociados = $asociadoRepository->findAll();

}catch (FileException $fileException){
    $errores[]=$fileException->getMessage();
}catch (QueryException $exception){
    $errores[]=$exception->getMessage();
}


require 'views/asociados.view.php';