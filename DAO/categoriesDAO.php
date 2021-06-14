<?php

function daoGetCategories()
{
    if (file_exists(DIR_BASE."data/categorias.json")){
        $categories = json_decode(file_get_contents(DIR_BASE."data/categorias.json"), true);
    }else{
         $categories = array();
    }
    return $categories;
}

function daoDeleteCategories($categoriaId)
{
    $categories = daoGetCategories();
    unset($categories[$categoriaId]);
    $fp = fopen(DIR_BASE."data/categorias.json", "w");
    fwrite($fp, json_encode($categories));
    fclose($fp);
}

function daoGuardarCategoria($datos = array()){
    $categories = daoGetCategories();
    $id = date('Ymdhisu');
    $categories[$id] = array(
       'id_categoria' => $id,
       'nombre' => $datos['nombre'],
   ); 
   file_put_contents(DIR_BASE.'data/categorias.json',json_encode($categories));
   return $id;

}

function daoModificarCategoria($datos = array(), $id){
    $categories = daoObtenerCategorias();
    $categories[$id] = array(
       'id_categoria' => $id,
       'nombre' => $datos['nombre'],
       
   ); 
   file_put_contents(DIR_BASE.'data/categorias.json',json_encode($categories));
}

function daoObtenerCategorias(){
    if(file_exists(DIR_BASE.'data/categorias.json')){ 
        $categories = json_decode(file_get_contents(DIR_BASE.'data/categorias.json'),TRUE);	
    }else{
        $categories = array();
    }

    return $categories;

}

function daoObtenerCategoria($id){
    $categories = daoObtenerCategorias();  
    return $categories[$id];

}
?>