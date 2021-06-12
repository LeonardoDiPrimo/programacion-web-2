<?php

function daoGetBrands()
{
    if (file_exists(DIR_BASE."data/marcas.json"))
        $brands = json_decode(file_get_contents(DIR_BASE."data/marcas.json"), true);
    else $brands = array();

    return $brands;
}
