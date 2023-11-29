<?php
function mostrar_nombre($nombre){
    return ucwords(str_replace("_"," ",$nombre));
}

function crear_nombre($nombre){
    return strtolower(str_replace(" ","_",$nombre));
}

function mostrar_precio($ruta_archivo, $editar = false){
    if($editar)
        $comic = file_exists($ruta_archivo) ? file_get_contents($ruta_archivo) : "";
    else
        $comic = file_exists($ruta_archivo) ? nl2br(file_get_contents($ruta_archivo)) : "Cunsultar precio";

    return $comic;
}