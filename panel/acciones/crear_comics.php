<?php

    require_once("../../config/config.php");
    require_once("../../config/funciones.php");

if(empty($_POST["nombre"]) || $_FILES["imagen"]["size"] == "0"):
    header("Location: ../index.php?seccion=crear_comics&estado=error&error=campos_obligatorios");
    die();
endif;

$nombre = $_POST["nombre"];
$comic = $_POST["precio"] ?? false;
$imagen = $_FILES["imagen"];

if($imagen["type"] != "image/jpeg"):
    header("Location: ../index.php?seccion=crear_comics&estado=error&error=formato_imagen");
    die();
endif;

$nombre = crear_nombre($nombre);

if(is_dir(RUTA_COMICS . $nombre)):
    header("Location: ../index.php?seccion=crear_comics&estado=error&error=comic_existe");
    die();
endif;

mkdir(RUTA_COMICS . $nombre);


if($comic):
    file_put_contents(RUTA_COMICS . "$nombre/precio.txt",$comic);

endif;


move_uploaded_file($imagen["tmp_name"], RUTA_COMICS . "$nombre/$nombre.jpg");

header("Location: ../index.php?seccion=listado_comics&estado=ok&ok=nuevo_comic");
