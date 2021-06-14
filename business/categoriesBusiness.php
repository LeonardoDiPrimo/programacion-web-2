<?php

require_once(DIR_BASE."DAO/categoriesDAO.php");

function businessGetCategories()
{
    return daoGetCategories();
}

function businessDeleteCategories($categoriaId)
{
    daoDeleteCategories($categoriaId);
}

function businessGuardarCategoria($datos = array())
{
    daoGuardarCategoria($datos);
}

function businessModificarCategoria($datos = array(), $id){
    daoModificarCategoria($datos, $id);
}


function businessObtenerCategorias(){
 
    return daoObtenerCategorias();

}

function businessObtenerCategoria($id){
    return daoObtenerCategoria($id);
}

?>