<!DOCTYPE html>
<?php
    require_once("config/arrays.php");
    require_once("config/config.php");
    require_once("config/funciones.php");

    $seccion = $_GET["seccion"] ?? "inicio";
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda Comictastico</title>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="favicon.ico" rel="icon" type="image/ico" />
</head>
<body class="bg-light">
   <audio id='tono' preload="auto">
        <source src="audios/John%20Williams%20-%20Star%20Wars%20Main%20Theme%20(Full).mp3">
    </audio>
    <div id="contenedor">
        <header>
           <h25>
            <img src="imagenes/imagen%20principal%20comic.jpg" alt="">
            </h25>
        </header>
        <nav class="bg-dark">
            <div>
                <ul class="nav justify-content-center">
                  <?php
                        foreach($navbar as $url => $nombre):
                    ?>
                        <li class="nav-item <?= $seccion == $link ? "active" : ""; ?>">
                            <a class="nav-link" href="index.php?seccion=<?= $nombre; ?>"><?= $nombre; ?></a>
                        </li>
                    <?php
                        endforeach;
                    ?>
                </ul>
            </div>
        </nav>
        <section>
            <?php
                 if(file_exists("secciones/$seccion.php")){
                    require_once("secciones/$seccion.php");
                }else{
                    require_once("secciones/404.php");
                }
            ?>
        </section>
        <footer class="text-center text-white py-2 navbar-fixed-bottom">
            <span><sup>&copy;</sup>2019 - Tienda Comictastico</span>
        </footer>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
    var audio = $("#tono")[0];
    $("h25").mouseenter(function() {
        audio.play();
    });
    $("h25").mouseleave(function() {
        audio.pause();
    });
    </script>
    
</body>
</html>