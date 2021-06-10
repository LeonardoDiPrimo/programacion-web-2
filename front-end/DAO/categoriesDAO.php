<?php

function daoGetCategories()
{
    if (file_exists("data/categorias.json"))
        $categories = json_decode(file_get_contents("data/categorias.json"), true);
    else $categories = array();

    return $categories;
}
