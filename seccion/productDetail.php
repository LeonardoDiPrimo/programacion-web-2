<?php

require_once("php-json-file-decode/json-file-decode.class.php");

$read = new json_file_decode();
$json = $read->json("listOfProducts.json");

//Voy a buscar el producto por el indice, si no lo encuentro no hago nada
if ($_GET["productId"] != null && $_GET["productId"] > 0 && $_GET["productId"] <= sizeof($json["products"])) {
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
                        <br>
                        <li>Marca: <?= strtoupper($product["brand"]) ?></li>
                        <li>Modelo: <?= strtoupper($product["model"]) ?></li>
                        <!--  <li>Category: Illustration</li> -->
                    </ul>
                    <form id="commentForm">
                        <div class="row align-items-stretch mb-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Ingresar email" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="name" type="number" min="1" max="5" step="0.5" placeholder="Ingresar calificación" required />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group form-group-textarea mb-md-0">
                                    <textarea class="form-control" id="message" rows="4" cols="20" placeholder="Ingresar descripción" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div id="success"></div>
                            <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar Comentario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
} else  require_once("seccion/home.php"); // Si el id del producto es invalido lo mando al home
