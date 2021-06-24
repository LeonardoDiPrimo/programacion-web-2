<?php

require_once(DIR_BASE . "DAO/productsDAO.php");
//FUNCION GUARDAR PRODUCTO
function businessSaveProducts($data = array())
{
    // Utilizo el nombre porque si no se carga una imagen el $_FILES no es vacio, es un array sin datos
    if (!empty($_FILES['imagen']['name'])) {
        $data['url'] = $_FILES['imagen']['name'];
    }
    $productId = daoSaveProducts($data);

    if (!empty($_FILES['imagen']['name'])) {
        if (!is_dir(DIR_BASE . 'images/' . $productId)) {
            mkdir(DIR_BASE . 'images/' . $productId);
        }
        move_uploaded_file($_FILES['imagen']['tmp_name'], DIR_BASE . 'images/' . $productId . '/' . $_FILES['imagen']['name']);
        if (!empty($data["old_imagen"])) {
            if (file_exists(DIR_BASE . 'images/' . $productId . '/' . $data["old_imagen"])) {
                unlink(DIR_BASE . 'images/' . $productId . '/' . $data["old_imagen"]);
            }
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
    //Si no se carga una imagen cuando se actualiza el producto me quedo con la anterior
    $data['url'] = $data["old_imagen"];

    // Utilizo el nombre porque si no se carga una imagen el $_FILES no esta vacio, es un array sin datos
    if (!empty($_FILES['imagen']['name'])) $data['url'] = $_FILES['imagen']['name'];
    
    daoUpdateProduct($data, $productId);

    if (!empty($_FILES['imagen']['name'])) {
        if (!is_dir(DIR_BASE . 'images/' . $productId)) {
            mkdir(DIR_BASE . 'images/' . $productId);
        }
        move_uploaded_file($_FILES['imagen']['tmp_name'], DIR_BASE . 'images/' . $productId . '/' . $_FILES['imagen']['name']);
        if (!empty($data["old_imagen"])) {
            if (file_exists(DIR_BASE . 'images/' . $productId . '/' . $data["old_imagen"])) {
                unlink(DIR_BASE . 'images/' . $productId . '/' . $data["old_imagen"]);
            }
        }
    }
}

function businessDeleteProducts($productId)
{
    daoDeleteProducts($productId);
}
