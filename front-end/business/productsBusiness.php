<?php

require_once("DAO/productsDAO.php");

function businessGetProducts()
{
    return daoGetProducts();
}

function businessFindProductById($productId)
{
    return daoFindProductById($productId);
}
