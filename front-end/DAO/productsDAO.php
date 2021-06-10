<?php

function daoGetProducts()
{
    if (file_exists("data/loadProducts.json"))
        $products = json_decode(file_get_contents("data/loadProducts.json"), true);
    else $products = array();

    return $products;
}

function daoFindProductById($productId)
{
    $products = daoGetProducts();
    return $products[$productId];
}
