<?php

require_once("../../config/config.php");
require_once("../../config/funciones.php");

if(empty($_POST["id"]) || is_dir(!RUTA_COMICS . $_POST["id"])):
    header("Location: ../index.php?seccion=listado_comics&estado=error&error=comic_inexistente");
    die();
endif;

$nombre = crear_nombre($_POST["nombre"]);
$comic = htmlentities($_POST["precio"]) ?? false;

rename(RUTA_COMICS . $id, RUTA_COMICS . $nombre);

if($comic):
    file_put_contents(RUTA_COMICS . "$nombre/precio.txt", $comic);
else:
    unlink(RUTA_COMICS . "$nombre/precio.txt");
endif;

if($_FILES["imagen"]["size"] > 0 && $_FILES["imagen"]["type"] == "image/jpeg"):

    unlink(RUTA_COMICS . "$nombre/$id.jpg");

    move_uploaded_file($_FILES["imagen"]["tmp_name"], RUTA_COMICS . "$nombre/$nombre.jpg");

else:

    rename(RUTA_COMICS . "$nombre/$id.jpg",  RUTA_COMICS . "$nombre/$nombre.jpg");

endif;

header("Location: ../index.php?seccion=listado_comics&estado=ok&ok=borrado");