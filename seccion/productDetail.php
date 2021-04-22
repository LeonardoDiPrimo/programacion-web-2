<?php

require_once("php-json-file-decode/json-file-decode.class.php");

$read = new json_file_decode();
$json = $read->json("listOfProducts.json");

//Voy a buscar el producto por el indice, si no lo encuentro no hago nada
if ($_GET["productId"] != null and sizeof($json["products"]) >= $_GET["productId"]) {
    $product = $json["products"][$_GET["productId"] - 1];
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="modal-body">
                    <!-- Project Details Go Here-->
                    <h2 class="text-uppercase"><?= $product["name"] ?></h2>
                    <p class="item-intro text-muted"><?= $product["description"] ?></p>
                    <img class="img-fluid d-block mx-auto" src="<?= $product["url"] ?>" alt="" />
                    <!--  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consec!</p>-->
                    <ul class="list-inline">
                        <li>Marca: <?= strtoupper($product["brand"]) ?></li>
                        <li>Modelo: <?= strtoupper($product["model"]) ?></li>
                        <!--  <li>Category: Illustration</li> -->
                    </ul>
                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                        <i class="fas fa-times mr-1"></i>
                        Cerrar Producto
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php

} else  require_once("seccion/home.php"); // Si el id es invalido lo mando al home
