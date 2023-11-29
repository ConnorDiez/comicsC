<?php
    $titulo = "Nuevo Comic";
    $submit = "Crear";

    if(!empty($_GET["id"])):
        $titulo = "Editar Comic";
        $submit = "Editar";

        $comic = $_GET["id"];
        $comic = $_GET["id"];


    endif;


?>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo text-center"><?= $titulo; ?></h1>
            </div>
        </div>

        <div class="row justify-content-center mt-4">

            <div class="col-12 col-md-5 my-3">
                <div class="card card-white">
                    <div class="card-body">
                        <form action="acciones/<?= strtolower($submit); ?>_comics.php" method="POST" enctype="multipart/form-data">

                            <?php
                                if(isset($comic)):
                            ?>
                                    <input type="hidden" name="id" value="<?= $comic; ?>">
                            <?php
                                endif;
                            ?>

                            <div class="form-group">
                              <label for="nombre">Nombre</label>
                              <input type="text"
                                class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre del comic" value="<?= isset($comic) ? mostrar_nombre($comic) : ""; ?>">
                            </div>

                            <div class="form-group">
                              <label for="imagen">Imagen</label>
                              <input type="file" class="form-control-file" name="imagen" id="imagen" aria-describedby="fileHelpId" accept="image/jpeg">
                              <small id="fileHelpId" class="form-text text-muted">El archivo tiene que ser una imagen <b class="text-danger">JPG</b></small>

                            <?php
                                if(isset($comic)):
                            ?>
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="<?= "../comics/$comic/$comic.jpg" ?>" alt="" class="img-fluid">
                                        </div>
                                    </div>
                            <?php
                                endif;
                            ?>
                            </div>

                            <div class="form-group">
                              <label for="precio">Precio</label>
                              <input type="text"
                                class="form-control" name="precio" id="precio" placeholder="Ingrese el comic colocando el signo $ y al final AR" value="<?= isset($comic) ? mostrar_precio(RUTA_COMICS . "$comic/precio.txt", true) : ""; ?>">
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg btn-block"><?= $submit; ?> comic</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
