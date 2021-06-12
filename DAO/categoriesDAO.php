<?php

function daoGetCategories()
{
    if (file_exists(DIR_BASE."data/categorias.json"))
        $categories = json_decode(file_get_contents(DIR_BASE."data/categorias.json"), true);
    else $categories = array();

    return $categories;
}
