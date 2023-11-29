<?php
    require_once("../config/config.php");
    require_once("../config/arrays.php");
    require_once("../config/funciones.php");

    $seccion = $_GET["seccion"] ?? "listado_comics";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel</title>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body class="bg-light">
  <div id="contenedor">
  <nav class="bg-dark">
      <div>
          <ul class="nav justify-content-center">
            <?php
                  foreach($navbarPanel as $url => $nombre):
              ?>
                  <li class="nav-item <?= $seccion == $url ? "active" : ""; ?>">
                      <a class="nav-link" href="index.php?seccion=<?= $url; ?>"><?= $nombre; ?></a>
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
      <span><sup>&copy;</sup>2019 - Tienda Cómictastico</span>
  </footer>
</div>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
