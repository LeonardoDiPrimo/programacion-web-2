<?php 

//funcion para cortar un texto pero no las palabras.

function cortar_palabras($texto, $limite, $break=' ', $pad='...'){
	if(strlen($texto) <= $limite)
		return $texto;
	$quiebre = strpos($texto, $break, $limite);
	if( $quiebre != false){
		if($quiebre < (strlen($texto) - 1)){
			$texto = substr($texto, 0, $quiebre).$pad;
		}
	}
	return $texto;
}

//Funcion para cortar textos
function cortar($string, $maximo = 80)
{
	$cantidad = strlen($string);


	if($cantidad > $maximo)
	{
		$maximo = $maximo - 3;
		$a = cut_html(substr($string, 0, $maximo));
		$a .= "...";
		return $a;
	}
	else
	{
		return $string;
	}
}

//Funcion para evitar que se cortan caracteres html
function cut_html($string)
{
    $a=$string;

    while ($a = strstr($a, '&'))
    {
        $b=strstr($a, ';');
        if (!$b)
        {
           
            $nb=strlen($a);
            return substr($string, 0, strlen($string)-$nb);
        }
        $a=substr($a,1,strlen($a)-1);
    }
    return $string;
}
?>