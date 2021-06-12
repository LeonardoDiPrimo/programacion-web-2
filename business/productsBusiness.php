<?php

require_once(DIR_BASE.'DAO/productsDAO.php');

//FUNCION OBTENER PRODUCTO
function businessGetProducts()
{
    return daoGetProducts();
}

//FUNCION BUSCAR PRODUCTO POR ID
function businessFindProductById($productId)
{
    return daoFindProductById($productId);
}

//FUNCION MODIFICAR PRODUCTO
function businessUpdateProduct($productId, $data = array())
{
    daoUpdateProduct($productId, $data);
}

function businessDeleteProducts($productId)
{
    daoDeleteProducts($productId);
}
?>