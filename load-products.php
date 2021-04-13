<?php

//Genero un array en donde voy a guardar todos los productos
$products_array = array("products" => array(
    array(
        "name" => "Gabinete ASUS ROG STRIX Helios Aluminum Black RGB",
        "isOutstanding" => false,
        "url" => "assets/img/portfolio/gabinete-asus-1.jpg"
    ),
    array(
        "name" => "Gabinete ASUS TUF GT501 Vidrio Templado Black 3 x Coolers RGB Aura Sync",
        "isOutstanding" => true,
        "url" => "assets/img/portfolio/gabinete-asus-2.jpg"
    ),
    array(
        "name" => "Gabinete Cougar DarkBlader-G RGB Vidrio Templado",
        "isOutstanding" => true,
        "url" => "assets/img/portfolio/gabinete-cougar-1.jpg"
    ),
    array(
        "name" => "Placa de Video Zotac GeForce RTX 3060 Ti 8GB GDDR6 Twin Edge OC",
        "isOutstanding" => true,
        "url" => "assets/img/portfolio/placa-de-video-zotac.jpg"
    ),
    array(
        "name" => "Placa de Video MSI GeForce RTX 3060 12GB GDDR6 VENTUS 2X OC",
        "isOutstanding" => true,
        "url" => "assets/img/portfolio/placa-de-video-msi.jpg"
    ),
    array(
        "name" => "Placa de Video ASUS Radeon RX 6800 XT 16GB GDDR6 ROG STRIX LC OC Water Cooled",
        "isOutstanding" => true,
        "url" => "assets/img/portfolio/placa-de-video-asus.jpg"
    ),
    array(
        "name" => "Mother ASUS ROG STRIX X570-E Gaming AM4 PCIe Gen4 WiFi Dual M.2",
        "isOutstanding" => true,
        "url" => "assets/img/portfolio/mother-asus.jpg"
    ),
    array(
        "name" => "Mother Gigabyte Z490 Aorus Xtreme Socket 1200 10th Gen",
        "isOutstanding" => true,
        "url" => "assets/img/portfolio/mother-gigabyte-z490.jpg"
    ),
    array(
        "name" => "Mother Gigabyte B460 AORUS PRO AC Socket 1200",
        "isOutstanding" => true,
        "url" => "assets/img/portfolio/mother-gigabyte-b460.jpg"
    ),
    array(
        "name" => "Memoria OLOy DDR4 64GB (2x32GB) Warhawk Black RGB 3600MHz CL18 ",
        "isOutstanding" => false,
        "url" => "assets/img/portfolio/memoria-ram.jpg"
    ),
    array(
        "name" => "Mouse ASUS ROG CHAKRAM RF Inalambrico 16K DPI RGB",
        "isOutstanding" => true,
        "url" => "assets/img/portfolio/mouse-asus.jpg"
    ),
    array(
        "name" => "Mouse Logitech G502 Lightspeed Wireless",
        "isOutstanding" => true,
        "url" => "assets/img/portfolio/mouse-logitech.jpg"
    ),
));

//Genera un archivo Json donde se guarda la info del array
$products_json = json_encode($products_array);
$handler = fopen("listOfProducts.json", "w+");
fwrite($handler, $products_json);
fclose($handler);
