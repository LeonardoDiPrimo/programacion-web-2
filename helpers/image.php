<?php

//Funcion para borrar imagenes
function eliminar_archivos($dir)
{
	if (is_dir($dir)) {
		$directorio = opendir($dir);
		while ($archivo = readdir($directorio)) {
			if ($archivo != '.' and $archivo != '..') {
				@unlink($dir . $archivo);
			}
		}
		closedir($directorio);
		@rmdir($dir);
	}
}
