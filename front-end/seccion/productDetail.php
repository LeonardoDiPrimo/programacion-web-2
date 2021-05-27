<?php

require_once("DAO/comments.php");

$products = json_decode(file_get_contents("../data/loadProducts.json"), true);

//Voy a buscar el producto por el id, si no lo encuentro redirecciono al home
if (isset($_GET["productId"])) {
    $productFilter = array_filter($products["products"], function ($product) {
        return ($product['id'] == $_GET["productId"]);
    });
}

if (isset($_POST["sendComment"])) {
    saveComment($_POST);
}

if (!empty($productFilter)) {
    $product = $productFilter[$_GET["productId"]];
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="modal-body">
                    <h2 class="text-uppercase"><?php echo $product["name"] ?></h2>
                    <p class="item-intro text-muted"><?php echo $product["description"] ?></p>
                    <img class="img-fluid d-block mx-auto" src="<?php echo $product["url"] ?>" alt="" />
                    <ul class="list-inline">
                        <br>
                        <li>Marca: <?php echo strtoupper($marcas[$product["brandId"]]["nombre"]) ?></li>
                        <li>Modelo: <?php echo strtoupper($product["model"]) ?></li>
                    </ul>
                    <form name="commentForm" method="POST">
                        <div class="row align-items-stretch mb-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" placeholder="Ingresar email" required />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="qualification" type="number" min="1" max="5" step="0.5" placeholder="Ingresar calificación" required />
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="productId" value="<?php echo $product["id"] ?>" />
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group form-group-textarea mb-md-0">
                                    <textarea class="form-control" name="description" rows="4" cols="20" placeholder="Ingresar descripción" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div id="success"></div>
                            <button class="btn btn-primary btn-xl text-uppercase" name="sendComment" type="submit" value="send">Enviar Comentario</button>
                        </div>
                    </form>
                    <br>
                    <h3>Comentarios</h3>
                    <table cellspacing="20" cellpadding="20" border="1">
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Calificación</th>
                        </tr>
                        <?php
                        $limit = 0;
                        $comments = getComments();
                        krsort($comments);

                        foreach ($comments as $comment) {
                            if ($comment['productId'] == $product["id"] && $limit < 10) { ?>
                                <tr>
                                    <td><?php echo $comment["email"] ?></td>
                                    <td><?php echo $comment["description"] ?></td>
                                    <td><?php echo $comment["qualification"] ?></td>
                                </tr>
                        <?php
                                $limit++;
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
} else require_once("seccion/home.php");
