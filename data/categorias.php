<?php
$categorias = array(
	
	'1' => array (
		'id_categoria' => 1,
		'nombre' => 'Placas de Video',
),

    '2' => array (
	    'id_categoria' => 2,
	    'nombre' => 'Motherboards',
),

    '3' => array (
	    'id_categoria' => 3,
	    'nombre' => 'Gabinetes',
),
    '4' => array(
        'id_categoria' => 4,
	    'nombre' => 'Perifericos',
    ),
    '5' => array(
        'id_categoria' => 5,
	    'nombre' => 'Memorias RAM',
	)

);
$categorias_json = json_encode($categorias);
$handler = fopen(DIR_BASE."data/categorias.json", "w+");
fwrite($handler, $categorias_json);
fclose($handler);
?>