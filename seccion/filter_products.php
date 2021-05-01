<!-- Filtros con seccion GPU, MOTHER, GABINETE Y PERIFERICOS desplegable -->

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
            <?php
				require_once('filtros.php');
			?>
		</div>
		<div class="col-md-9 my-3">
        	<?php
       			include_once('list_products.php');
        	?>
		</div>
	</div>
</div>