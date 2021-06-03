<?php
$marcas = array(
	
	'1' => array (
		'id_marcas' => 1,
		'nombre' => 'GIGABYTE',
),

    '2' => array (
	    'id_marcas' => 2,
	    'nombre' => 'ASUS',
),

    '3' => array (
	    'id_marcas' => 3,
	    'nombre' => 'MSI',
),
    '4' => array(
        'id_marcas' => 4,
	    'nombre' => 'COUGAR',
),
    '5' => array(
        'id_marcas' => 5,
        'nombre' => 'LOGITECH',
),
    '6' => array(
        'id_marcas' => 6,
	    'nombre' => 'ZOTAC',
),
    '7' => array(
        'id_marcas' => 7,
	    'nombre' => 'OLOy',
)
);

$marcas_json = json_encode($marcas);
$handler = fopen("../data/marcas.json", "w+");
fwrite($handler, $marcas_json);
fclose($handler);
