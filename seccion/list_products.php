<!-- Listado del hardware con precio y boton descripcion -->

<?php

$products = $products_array["products"];

if (array_key_exists('categoryId', $_GET)) {
	$products = array_filter($products, function ($product) {
		return ($product['categoryId'] == $_GET["categoryId"]);
	});
}

if (array_key_exists('brandId', $_GET)) {
	$products = array_filter($products, function ($product) {
		return ($product['brandId'] == $_GET["brandId"]);
	});
}
?>

<div class="container">
	<div class="row">
		<div class="col-md-6 pt-5">
			<h1 class="text-dark pb-4">Listado de productos</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-3 ">
			<div class="card mt-5">
				<div id="accordion-side-bar">
					<div class="card">
						<div class="card-header bg-dark" id="header-categorias" data-toggle="collapse" type="button" data-target="#collapse-categorias" aria-controls="collapse-categorias">
							<h6 class="mb-0 text-light">Categorias</h6>
						</div>
						<div id="collapse-categorias" class="collapse show" data-parent="#accordion-side-bar">
							<div class="card-body">
								<?php
								foreach ($categorias as $category) { ?>
									<a href="index.php?seccion=products&categoryId=<?= $category["id_categoria"]; ?>"><button type="button" class="list-group-item list-group-item-action"><?= $category["nombre"] ?></button></a>
								<?php
								}
								?>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header bg-dark" id="header-marcas" data-toggle="collapse" type="button" data-target="#collapse-marcas" aria-controls="collapse-marcas">
							<h6 class="mb-0 text-light">Marcas</h6>
						</div>
						<div id="collapse-marcas" class="collapse show" data-parent="#accordion-side-bar">
							<div class="card-body">
								<?php
								foreach ($marcas as $brand) { ?>
									<a href="index.php?seccion=products&brandId=<?= $brand["id_marcas"]; ?>"><button type="button" class="list-group-item list-group-item-action"><?= $brand["nombre"] ?></button></a>
								<?php
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9 my-3">
			<div class="container mb-4  py-4">
				<div class="row">
					<?php
					foreach ($products as $rkey => $product) {  ?>
						<div class="col-md-3" style="float:left">
							<div class="card mb-2">
								<img class="card-img-top" src=<?= $product["url"]; ?> alt="Card image cap">
								<div class="card-body">
									<p class="card-text">Nombre</p>
									<p class="card-text text-info">$ <?= $product["price"]; ?></p>
									<p class="card-text">Descripcion</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group">
											<a href="index.php?seccion=productDetail&productId=<?= $product["id"]; ?>">
												<button type="button" class="btn btn-dark"> Detalles</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>