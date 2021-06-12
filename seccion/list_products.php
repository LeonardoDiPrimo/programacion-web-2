<!-- Listado del hardware con precio y boton descripcion -->
<?php
require_once(DIR_BASE."business/productsBusiness.php");
require_once(DIR_BASE."business/categoriesBusiness.php");
require_once(DIR_BASE."business/brandsBusiness.php");

$products = daoGetProducts();

if (array_key_exists('applyFilters', $_POST)) {
	$filter_products = [];

	//Solo aplica filtros sobre Categoria
	if (array_key_exists('categorys', $_POST) && !array_key_exists('brands', $_POST)) {
		foreach ($_POST['categorys'] as $category) {
			foreach ($products as $product) {
				if ($product["categoryId"] == $category) array_push($filter_products, $product);
			}
		};
	}
	//Solo aplica filtros sobre la Marca
	else if (!array_key_exists('categorys', $_POST) && array_key_exists('brands', $_POST)) {
		foreach ($_POST['brands'] as $brand) {
			foreach ($products as $product) {
				if ($product["brandId"] == $brand) array_push($filter_products, $product);
			};
		};
	}
	//Aplica filtros sobre Categoria y Marca
	elseif (array_key_exists('categorys', $_POST) && array_key_exists('brands', $_POST)) {
		foreach ($_POST['categorys'] as $category) {
			foreach ($products as $product) {
				if ($product["categoryId"] == $category) {
					foreach ($_POST['brands'] as $brand) {
						if ($product["brandId"] == $brand) array_push($filter_products, $product);
					}
				}
			}
		}
	}
	// Si no aplico ningun filtro entonces muestro todo
	else $filter_products = $products;

	//Si tengo productos en ($filter_products) se lo seteo a $products que es el que popula los productos
	!empty($filter_products) ? $products = $filter_products : $products = array();
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
			<form name="listProductsForm"  method="POST">
				<div id="accordion-side-bar">
					<div class="card">
						<div class="card-header bg-dark" id="header-categorias" data-toggle="collapse" type="button" data-target="#collapse-categorias" aria-controls="collapse-categorias">
							<h6 class="mb-0 text-light">Categorias</h6>
						</div>
						<div id="collapse-categorias" class="collapse show" data-parent="#accordion-side-bar">
							<div class="card-body">
								<?php
								foreach (daoGetCategories() as $category) { ?>
									<input type="checkbox" name="categorys[]" value=<?php echo $category["id_categoria"] ?>> <?php echo $category["nombre"] ?><br>
								<?php
								}
								?>
							</div>
						</div>
					</div>
					<br>
					<div class="card">
						<div class="card-header bg-dark" id="header-marcas" data-toggle="collapse" type="button" data-target="#collapse-marcas" aria-controls="collapse-marcas">
							<h6 class="mb-0 text-light">Marcas</h6>
						</div>
						<div id="collapse-marcas" class="collapse show" data-parent="#accordion-side-bar">
							<div class="card-body">
								<?php
								foreach (daoGetBrands() as $brand) { ?>
									<input type="checkbox" name="brands[]" value=<?php echo $brand["id_marcas"] ?>> <?php echo $brand["nombre"] ?><br>
								<?php
								}
								?>
							</div>
						</div>
					</div>
					<br>
				</div>
				<input class="btn btn-primary btn-x5 text-uppercase" value="Aplicar filtros" type="submit" name="applyFilters">
			</form>
		</div>
		<div class="col-md-9 my-3">
			<div class="container mb-4  py-4">
				<div class="row">
					<?php
					if (!empty($products)) {
						foreach ($products as $product) {  ?>
							<div class="col-md-3" style="float:left">
								<div class="card mb-2">
									<img class="card-img-top" src=<?php echo $product["url"] ?> alt="Card image cap">
									<div class="card-body">
										<h6 class="card-title"><?php echo $product["name"] ?></h6>
										<p class="card-text text-info">$ <?php echo $product["price"] ?></p>
										<p class="card-text"><?php echo cortar_palabras($product["description"], 70) ?></p>
										<div class="d-flex justify-content-between align-items-center">
											<div class="btn-group">
												<a href="index.php?seccion=productDetail&productId=<?php echo $product["id"] ?>">
													<button type="button" class="btn btn-dark"> Detalles</button></a>
											</div>
										</div>
									</div>
								</div>
							</div>
					<?php
						}
					} else echo "No hay productos que complan los filtros seleccionados";
					?>
				</div>
			</div>
		</div>
	</div>
</div>