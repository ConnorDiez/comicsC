<?php

require_once("../../config/config.php");
require_once("../../config/funciones.php");

if(empty($_POST["id"]) || is_dir(!RUTA_COMICS . $_POST["id"])):
    header("Location: ../index.php?seccion=listado_comics&estado=error&error=comic_inexistente");
    die();
endif;

$comicas = $_POST["id"];

if(file_exists(RUTA_COMICS . "$comicas/precio.txt")){
    
    unlink(RUTA_COMICS . "$comicas/precio.txt");

}

unlink(RUTA_COMICS . "$comicas/$comicas.jpg");

rmdir(RUTA_COMICS . $comicas);



header("Location: ../index.php?seccion=listado_comics&estado=ok&ok=borrado");