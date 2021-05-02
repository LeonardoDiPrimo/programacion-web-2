<!-- Listado del hardware con precio y boton descripcion -->

<div class="container mb-4  py-4">
	<div class="row">
		<div class="col-md-3" style="float:left">
			<div class="card mb-2">
				<img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_682793-MLA44667221720_012021-O.webp" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Producto</p>
					<p class="card-text text-info">$ 1.000</p>
					<p class="card-text">Descripcion</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a><button type="button" class="btn btn-dark">Detalles</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="col-md-3" style="float:left">
			<div class="card mb-2">
				<img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_682793-MLA44667221720_012021-O.webp" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Producto</p>
					<p class="card-text text-info">$ 1.000</p>
					<p class="card-text">Descripcion</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a><button type="button" class="btn btn-dark">Detalles</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3" style="float:left">
			<div class="card mb-2">
				<img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_682793-MLA44667221720_012021-O.webp" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Producto</p>
					<p class="card-text text-info">$ 1.000</p>
					<p class="card-text">Descripcion</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a><button type="button" class="btn btn-dark">Detalles</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="col-md-3" style="float:left">
			<div class="card mb-2">
				<img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_682793-MLA44667221720_012021-O.webp" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Producto</p>
					<p class="card-text text-info">$ 1.000</p>
					<p class="card-text">Descripcion</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a><button type="button" class="btn btn-dark">Detalles</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>



	</div><!-- /.row -->

	<div class="row">

		<div class="col-md-3" style="float:left">
			<div class="card mb-2">
				<img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_682793-MLA44667221720_012021-O.webp" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Producto</p>
					<p class="card-text text-info">$ 1.000</p>
					<p class="card-text">Descripcion</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a><button type="button" class="btn btn-dark">Detalles</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="col-md-3" style="float:left">
			<div class="card mb-2">
				<img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_682793-MLA44667221720_012021-O.webp" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Producto</p>
					<p class="card-text text-info">$ 1.000</p>
					<p class="card-text">Descripcion</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a><button type="button" class="btn btn-dark">Detalles</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="col-md-3" style="float:left">
			<div class="card mb-2">
				<img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_682793-MLA44667221720_012021-O.webp" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Producto</p>
					<p class="card-text text-info">$ 1.000</p>
					<p class="card-text">Descripcion</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a><button type="button" class="btn btn-dark">Detalles</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="col-md-3" style="float:left">
			<div class="card mb-2">
				<img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_682793-MLA44667221720_012021-O.webp" alt="Card image cap">
				<div class="card-body">
					<p class="card-text">Producto</p>
					<p class="card-text text-info">$ 1.000</p>
					<p class="card-text">Descripcion</p>
					<div class="d-flex justify-content-between align-items-center">
						<div class="btn-group">
							<a><button type="button" class="btn btn-dark">Detalles</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!--Cuando se agrega el nombre del producto y la descrpcion se ve feo en la web, tendriamos que hacer si podemos que se vea mejor. -->
<div class="container mb-4  py-4">
	<div class="row">
		<?php
		foreach ($products_array["products"] as $rkey => $product) :  ?>
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
		endforeach;
		?>
	</div>
</div>