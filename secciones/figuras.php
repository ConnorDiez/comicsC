<?php
$figuras = [];

				$figuras[0] = [
						"url" => "imagenes/figuras1.jpg",
						"nombre" => "Heroes DC",
						"descripcion" => "$59.00 AR",
						
				];
				$galeria[1] = [
						"url" => "imagenes/figuras2.jpg",
						"nombre" => "Justicia Joven",
						"descripcion" => "$47.00 AR",
				
				];
				$galeria[2] = [
						"url" => "imagenes/figuras3",
						"nombre" => "Batman, superman, flash y El Guason",
						"descripcion" => "$52.00 AR",
				];
				$galeria[3] = [
						"url" => "imagenes/figuras4.jpg",
						"nombre" => "Flecha Verde",
						"descripcion" => "$200.00 AR",
						
				];
				$galeria[4] = [
						"url" => "imagenes/figuras5.jpg",
						"nombre" => "Superman",
						"descripcion" => "$250.00 AR",
						
				];
				$galeria[5] = [
						"url" => "imagenes/figuras6.jpg",
						"nombre" => "Destiny 2",
						"descripcion" => "$39.00 AR",
						
                     ];
				foreach($galeria as $imagen):
			?>
                    <div class="container my-3">
                        <div class="row text-center">
                            <div class="col">
                                <img class="libro img-fluid producto" src="<?= $imagen["url"]; ?>" alt="<?= $imagen["nombre"]; ?>">
                                
                                    <h2 class="card-title"><?= $imagen["nombre"]; ?></h2>
                                    
                                    <p class="card-text"><?= $imagen["descripcion"]; ?></p>
                                    <a class="btn btn-primary" href="">Agregar en el carrito</a>
                                
                            </div>
                        </div>
                    </div>
			<?php
				endforeach;
			?>


?>
    
    