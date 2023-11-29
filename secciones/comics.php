<?php

?>
                    <div class="container my-3">
                        <div class="row text-center">
													<?php

            $carpeta = opendir(RUTA_COMICS); //Esto devuelve un recurso

            // $contenido = readdir($carpeta); // Cada vez que se ejecuta devuelve un string con el nombre de lo que encontró

            while($comic = readdir($carpeta)):
                if($comic == "." || $comic == "..")
                    continue;

                $imagen = glob("comics/$comic/*.jpg")[0];
        ?>
                            <div class="col-12 col-lg-4 col-xl-4 my-3">
                                <img class="comic img-fluid comic" src="<?= $imagen ?>" alt="Foto de <?= mostrar_nombre($comic); ?>">

                                    <h2 class="card-title"><?= mostrar_nombre($comic); ?></h2>
                                    <p class="card-text"><?= mostrar_precio(RUTA_COMICS . "$comic/precio.txt"); ?></p>
                                    <p class="card-text"><?= mostrar_precio(RUTA_COMICS . "$comic/autor.txt"); ?></p>
                                    <a class="btn btn-primary" href="">Agregar en el carrito</a>

                            </div>
														<?php
													endwhile;
														?>
                        </div>
                    </div>
$