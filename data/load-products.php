<?php

//Genero un array en donde voy a guardar todos los productos
$products_array = array("products" => array(
    /* Inicializo el indice a mano asi no empieza con posicion 0 el array, como el primero ya es 1 los demas se incrementan normal */
    1 => array(
        "id" => 1,
        "name" => "Gabinete ASUS ROG STRIX Helios Aluminum Black RGB",
        "description" => "ROG Strix Helios White Edition es una caja de juegos con tres paneles de vidrio templado ahumado y una refinada construcción de aluminio cepillado - iluminación direccionable compatible y tecnología Aura Sync.",
        "brandId" => 2,
        "categoryId" => 3,
        "model" => "Helios Aluminum Black RGB",
        "isOutstanding" => true,
        "price" => 3000,
        "url" => "assets/img/portfolio/gabinete-asus-1.jpg"
    ),
    array(
        "id" => 2,
        "name" => "Gabinete ASUS TUF GT501 Vidrio Templado Black 3 x Coolers RGB Aura Sync",
        "description" => "El chasis ASUS TUF Gaming GT501 soporta hasta formatos EATX, presenta un panel metálico frontal, un lateral de cristal, ventilador RGB de 120 mm, ventilador radiador de 140 mm, ventilador PWM, espacio reservado para radiadores y USB 3.1 Gen. 1 Un estilo gaming fuera de serie Fabricado de resistente acero galvanizado con un grosor de 1,5 mm y terminado con una capa protectora a prueba de rozaduras y arañazos, el chasis TUF Gaming GT501 hace gala de un diseño industrial muy actual.",
        "brandId" => 2,
        "categoryId" => 3,
        "model" => "GT501 Vidrio Templado",
        "isOutstanding" => true,
        "price" => 3500,
        "url" => "assets/img/portfolio/gabinete-asus-2.jpg"
    ),
    array(
        "id" => 3,
        "name" => "Gabinete Cougar DarkBlader-G RGB Vidrio Templado",
        "description" => "El panel frontal de aluminio cepillado de DarkBlader-G y el diseño asimétrico aportan un estilo único y moderno a su construcción.",
        "brandId" => 4,
        "categoryId" => 3,
        "model" => "DarkBlader-G",
        "isOutstanding" => true,
        "price" => 5000,
        "url" => "assets/img/portfolio/gabinete-cougar-1.jpg"
    ),
    array(
        "id" => 4,
        "name" => "Placa de Video Zotac GeForce RTX 3060 Ti 8GB GDDR6 Twin Edge OC",
        "description" => "Viva el Juego con la nueva ZOTAC GAMING GeForce RTX 3060 Series, basada en arquitectura NVIDIA Ampere. Construida con núcleos RT y Tensor mejorados, nuevos multiprocesadores de transmisión y memoria súper rápida, las nuevas tarjetas gráficas ZOTAC GAMING ofrecen potencia de juego amplificada con fidelidad gráfica ultra",
        "brandId" => 6,
        "categoryId" => 1,
        "model" => "GeForce RTX 3060 Ti 8GB GDDR6",
        "isOutstanding" => true,
        "price" => 100000,
        "url" => "assets/img/portfolio/placa-de-video-zotac.jpg"
    ),
    array(
        "id" => 5,
        "name" => "Placa de Video MSI GeForce RTX 3060 12GB GDDR6 VENTUS 2X OC",
        "description" => "El panel frontal de aluminio cepillado de DarkBlader-G y el diseño asimétrico aportan un estilo único y moderno a su construcción.",
        "brandId" => 3,
        "categoryId" => 1,
        "model" => "GeForce RTX 3060 12GB GDDR6",
        "isOutstanding" => true,
        "price" => 12000,
        "url" => "assets/img/portfolio/placa-de-video-msi.jpg"
    ),
    array(
        "id" => 6,
        "name" => "Placa de Video ASUS Radeon RX 6800 XT 16GB GDDR6 ROG STRIX LC OC Water Cooled",
        "description" => "El panel frontal de aluminio cepillado de DarkBlader-G y el diseño asimétrico aportan un estilo único y moderno a su construcción.",
        "brandId" => 2,
        "categoryId" => 1,
        "model" => "RX 6800 XT 16GB GDDR6",
        "isOutstanding" => true,
        "price" => 200000,
        "url" => "assets/img/portfolio/placa-de-video-asus.jpg"
    ),
    array(
        "id" => 7,
        "name" => "Mother ASUS ROG STRIX X570-E Gaming AM4 PCIe Gen4 WiFi Dual M.2",
        "description" => "El panel frontal de aluminio cepillado de DarkBlader-G y el diseño asimétrico aportan un estilo único y moderno a su construcción.",
        "brandId" => 2,
        "categoryId" => 2,
        "model" => "X570-E Gaming AM4",
        "isOutstanding" => true,
        "price" => 7000,
        "url" => "assets/img/portfolio/mother-asus.jpg"
    ),
    array(
        "id" => 8,
        "name" => "Mother Gigabyte Z490 Aorus Xtreme Socket 1200 10th Gen",
        "description" => "El panel frontal de aluminio cepillado de DarkBlader-G y el diseño asimétrico aportan un estilo único y moderno a su construcción.",
        "brandId" => 1,
        "categoryId" => 2,
        "model" => "Z490 Aorus Xtreme",
        "isOutstanding" => true,
        "price" => 8000,
        "url" => "assets/img/portfolio/mother-gigabyte-z490.jpg"
    ),
    array(
        "id" => 9,
        "name" => "Mother Gigabyte B460 AORUS PRO AC Socket 1200",
        "description" => "El panel frontal de aluminio cepillado de DarkBlader-G y el diseño asimétrico aportan un estilo único y moderno a su construcción.",
        "brandId" => 1,
        "categoryId" => 2,
        "model" => " B460 AORUS PRO",
        "isOutstanding" => true,
        "price" => 9000,
        "url" => "assets/img/portfolio/mother-gigabyte-b460.jpg"
    ),
    array(
        "id" => 10,
        "name" => "Memoria OLOy DDR4 64GB (2x32GB) Warhawk Black RGB 3600MHz CL18 ",
        "description" => "El panel frontal de aluminio cepillado de DarkBlader-G y el diseño asimétrico aportan un estilo único y moderno a su construcción.",
        "brandId" => 7,
        "categoryId" => 5,
        "model" => "DDR4 64GB (2x32GB) Warhawk Black RGB 3600MHz",
        "isOutstanding" => true,
        "price" => 20000,
        "url" => "assets/img/portfolio/memoria-ram.jpg"
    ),
    array(
        "id" => 11,
        "name" => "Mouse ASUS ROG CHAKRAM RF Inalambrico 16K DPI RGB",
        "description" => "El panel frontal de aluminio cepillado de DarkBlader-G y el diseño asimétrico aportan un estilo único y moderno a su construcción.",
        "brandId" => 2,
        "categoryId" => 4,
        "model" => "CHAKRAM RF Inalambrico",
        "isOutstanding" => true,
        "price" => 15000,
        "url" => "assets/img/portfolio/mouse-asus.jpg"
    ),
    array(
        "id" => 12,
        "name" => "Mouse Logitech G502 Lightspeed Wireless",
        "description" => "El panel frontal de aluminio cepillado de DarkBlader-G y el diseño asimétrico aportan un estilo único y moderno a su construcción.",
        "brandId" => 5,
        "categoryId" => 4,
        "model" => "Logitech G502",
        "isOutstanding" => true,
        "price" => 16000,
        "url" => "assets/img/portfolio/mouse-logitech.jpg"
    ),
));

//Genera un archivo Json donde se guarda la info del array
$products_json = json_encode($products_array);
$handler = fopen("../data/loadProducts.json", "w+");
fwrite($handler, $products_json);
fclose($handler);
