<?php

//FUNCION OBTENER PRODUCTOS
function daoGetProducts()
{
    if (file_exists(DIR_BASE."data/loadProducts.json")) {
        $products = json_decode(file_get_contents(DIR_BASE."data/loadProducts.json"), true);
    } else {
        $products = array();
    }
    return $products;
}

//FUNCION OBTENER PRODUCTOS
function daoFindProductById($productId)
{
    $products = daoGetProducts();
    if (!empty($products[$productId])) return $products[$productId];
    else return null;
}

//FUNCION MODIFICAR PRODUCTO
function daoUpdateProduct($data = array(), $id)
{
}

//FUNCION BORRAR PRODUCTOS
function daoDeleteProducts($productId)
{
    $products = daoGetProducts();
    unset($products[$productId]);
    $fp = fopen(DIR_BASE."data/loadProducts.json", "w");
    fwrite($fp, json_encode($products));
    fclose($fp);
}
    
    //otra forma
    //file_put_contents('../data/loadProducts.son', json_encode($products));