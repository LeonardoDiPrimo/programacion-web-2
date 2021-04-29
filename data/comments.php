<?php

//Genero un array en donde voy a guardar todos los comentarios
$comments_array = array("comments" => array(
    /* Inicializo el indice a mano asi no empieza con posicion 0 el array, como el primero ya es 1 los demas se incrementan normal */
    1 => array(
        "productId" => 1,
        "email" => "leo@gmail.com",
        "description" => "Me gusto",
        "qualification" => 5

    ),
    array(
        "productId" => 1,
        "email" => "juan@gmail.com",
        "description" => "No gusto",
        "qualification" => 1
    ),
    array(
        "productId" => 2,
        "email" => "pablo@gmail.com",
        "description" => "Maso",
        "qualification" => 3
    )
));

//Genera un archivo Json donde se guarda la info del array
$comments_json = json_encode($comments_array);
$handler = fopen("data/comments.json", "w+");
fwrite($handler, $comments_json);
fclose($handler);

?>