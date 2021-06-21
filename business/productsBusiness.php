<?php

require_once(DIR_BASE . "DAO/productsDAO.php");
//FUNCION GUARDAR PRODUCTO
function businessSaveProducts($data = array())
{
    if (!empty($_FILES['imagen'])) {
        $data['url'] = $_FILES['imagen']['name'];
    }
    
    $productId = daoSaveProducts($data);

    if (!empty($_FILES['imagen'])) {
        if (!is_dir(DIR_BASE . 'images/' . $productId)) {
            mkdir(DIR_BASE . 'images/' . $productId);
        }
        move_uploaded_file($_FILES['imagen']['tmp_name'], DIR_BASE . 'images/' . $productId . '/' . $_FILES['imagen']['name']);
        if (file_exists(DIR_BASE . 'images/' . $productId . '/' . $data["old_imagen"])) {
            unlink(DIR_BASE . 'images/' . $productId . '/' . $data["old_imagen"]);
        }
    }
}

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
function businessUpdateProduct($data = array(), $productId)
{
    if (!empty($_FILES['imagen'])) {
        $data['url'] = $_FILES['imagen']['name'];
    }

    daoUpdateProduct($data, $productId);

    if (!empty($_FILES['imagen'])) {
        if (!is_dir(DIR_BASE . 'images/' . $productId)) {
            mkdir(DIR_BASE . 'images/' . $productId);
        }
        move_uploaded_file($_FILES['imagen']['tmp_name'], DIR_BASE . 'images/' . $productId . '/' . $_FILES['imagen']['name']);
        if (file_exists(DIR_BASE . 'images/' . $productId . '/' . $data["old_imagen"])) {
            unlink(DIR_BASE . 'images/' . $productId . '/' . $data["old_imagen"]);
        }
    }
}

function businessDeleteProducts($productId)
{
    daoDeleteProducts($productId);
}
