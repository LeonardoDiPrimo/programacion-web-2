<!-- Filtro desplegable -->

<div class="card mt-5">
	<div id="accordion-side-bar">
		<div class="card">
			<div class="card-header bg-dark" id="header-categorias" data-toggle="collapse" type="button" data-target="#collapse-categorias" aria-controls="collapse-categorias">

				<h6 class="mb-0 text-light">Categorias</h6>

			</div>
			<div id="collapse-categorias" class="collapse show" data-parent="#accordion-side-bar">
				<div class="card-body">
					<!-- Esto lo deberia generar el Json me parece asi en el momento que se agrega una nueva categoria ya se carga sola
					<a href="products_gpu.php"><button type="button" class="list-group-item list-group-item-action">Placas de Video</button></a>
					<a><button type="button" class="list-group-item list-group-item-action">Motherboards</button></a>
					<a><button type="button" class="list-group-item list-group-item-action">Gabinetes</button></a>
					<a><button type="button" class="list-group-item list-group-item-action">Perifericos</button></a>
					<a><button type="button" class="list-group-item list-group-item-action">Memorias RAM</button></a>
					-->
					<?php
					foreach ($categorias as $category) { ?>
						<a><button type="button" class="list-group-item list-group-item-action"><?= $category["nombre"] ?></button></a>
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
					<!-- Lo mismo que categoria... Cargar la info del json para no tener que agregar a mano cuando se agregue una nueva marca
					<button type="button" class="list-group-item list-group-item-action">GIGABYTE</button>
					<button type="button" class="list-group-item list-group-item-action">ASUS</button>
					<button type="button" class="list-group-item list-group-item-action">MSI</button>
					<button type="button" class="list-group-item list-group-item-action">COUGAR</button>
					<button type="button" class="list-group-item list-group-item-action">LOGITECH</button>
					<button type="button" class="list-group-item list-group-item-action">ZOTAC</button>
					<button type="button" class="list-group-item list-group-item-action">ASROCK</button>
					-->
					<?php
					foreach ($marcas as $brand) { ?>
						<button type="button" class="list-group-item list-group-item-action"><?= $brand["nombre"] ?></button>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>