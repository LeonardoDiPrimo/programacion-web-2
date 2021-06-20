<?php

//FUNCION PARA GUARDAR PRODUCTOS
function daoSaveProducts($data = array())
{
    $products = daoGetProducts();
    $productId = date('Ymdhisu');
    $products[$productId] = array(
        "id" => $productId,
        "name" => $data['name'],
        "categoryId" => $data['categoryId'],
        "brandId" => $data['brandId'],
        "description" => $data['description'],
        "price" => $data['price'],
        "url" => ''
    );
    file_put_contents(DIR_BASE.'data/loadProducts.json', json_encode($products));
    return $productId;
}

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
function daoUpdateProduct($data = array(), $productId)
{
    $products = daoGetProducts();
    $products[$productId] = array(
        "id" => $productId,
        "name" => $data['name'],
        "categoryId" => $data['categoryId'],
        "brandId" => $data['brandId'],
        "description" => $data['description'],
        "price" => $data['price'],
        "url" => ''
    );
    file_put_contents(DIR_BASE.'data/loadProducts.json', json_encode($products));
}

//FUNCION BORRAR PRODUCTOS
function daoDeleteProducts($productId)
{
    $products = daoGetProducts();
    if(isset($products[$productId])){
        unset($products[$productId]);
        file_put_contents(DIR_BASE.'data/loadProducts.json', json_encode($products));
    }
    /*$fp = fopen(DIR_BASE."data/loadProducts.json", "w");
    fwrite($fp, json_encode($products));
    fclose($fp);*/
}
    
    //otra forma
    