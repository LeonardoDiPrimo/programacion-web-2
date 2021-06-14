<?php

require_once(DIR_BASE."DAO/brandsDAO.php");

function businessGetBrands()
{
    return daoGetBrands();
}

function businessDeleteBrands($brandId)
{
    daoDeleteBrands($brandId);
}

function businessGuardarMarca($datos = array())
{
    daoGuardarMarca($datos);
}

function businessModificarMarca($datos = array(), $id){
    daoModificarMarca($datos, $id);
}


function businessObtenerMarcas(){
 
    return daoObtenerMarcas();

}

function businessObtenerMarca($id){
    return daoObtenerMarca($id);

}

?>