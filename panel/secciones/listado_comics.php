<div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="titulo text-center">Comics</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="index.php?seccion=crear_comics" class="btn btn-success float-right my-3">Nuevo Cómic</a>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Titulo</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                        $carpeta = opendir(RUTA_COMICS);

                        while($comic = readdir($carpeta)):
                            if($comic == "." || $comic == "..")
                                continue;

                            $imagen = glob("../comics/$comic/*.jpg")[0];
                    ?>

                            <tr>
                                <td><img src="<?= $imagen ?>" alt="<?= mostrar_nombre($comic); ?>" width="50"></td>
                                <td><?= mostrar_nombre($comic); ?></td>
                                <td><?= mostrar_precio(RUTA_COMICS . "$comic/precio.txt"); ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="index.php?seccion=crear_comics&id=<?= $comic; ?>" class="btn btn-sm btn-primary">Editar</a>
                                        <form action="acciones/borrar_comics.php" method="post">
                                            <input type="hidden" name="id" value="<?= $comic; ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                    <?php
                        endwhile;

                        closedir($carpeta);
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
