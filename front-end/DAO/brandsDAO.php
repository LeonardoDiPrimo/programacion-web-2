<?php

function daoGetBrands()
{
    if (file_exists("../data/marcas.json"))
        $brands = json_decode(file_get_contents("../data/marcas.json"), true);
    else $brands = array();

    return $brands;
}
