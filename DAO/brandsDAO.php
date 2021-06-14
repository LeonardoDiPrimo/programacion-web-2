<?php

function daoGetBrands()
{
    if (file_exists(DIR_BASE."data/marcas.json")){
        $brands = json_decode(file_get_contents(DIR_BASE."data/marcas.json"), true);
    }else{ 
        $brands = array();
    }
    return $brands;
}

function daoDeleteBrands($brandId)
{
    $brands = daoGetBrands();
    unset($brands[$brandId]);
    $fp = fopen(DIR_BASE."data/marcas.json", "w");
    fwrite($fp, json_encode($brands));
    fclose($fp);
}

function daoGuardarMarca($datos = array()){
    $brands = daoGetBrands();
    $id = date('Ymdhisu');
    $brands[$id] = array(
       'id_marcas' => $id,
       'nombre' => $datos['nombre'],
   ); 
   file_put_contents(DIR_BASE.'data/marcas.json',json_encode($brands));
   return $id;

}

function daoModificarMarca($datos = array(), $id){
    $brands = daoObtenerMarcas();
    $brands[$id] = array(
       'id_marcas' => $id,
       'nombre' => $datos['nombre'],
       
   ); 
   file_put_contents(DIR_BASE.'data/marcas.json',json_encode($brands));
}

function daoObtenerMarcas(){
    if(file_exists(DIR_BASE.'data/marcas.json')){ 
        $brands = json_decode(file_get_contents(DIR_BASE.'data/marcas.json'),TRUE);	
    }else{
        $brands = array();
    }

    return $brands;

}

function daoObtenerMarca($id){
    $brands = daoObtenerMarcas();  
    return $brands[$id];

}
?>