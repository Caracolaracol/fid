<?php
 
 
 function cortarTexto($texto, $maxCaracteres = 80) {
	 // Si el texto es más corto o igual a $maxCaracteres, lo devolvemos como está
	 if (strlen($texto) <= $maxCaracteres) {
		 return $texto;
	 }
 
	 // Cortamos el texto en $maxCaracteres
	 $textoCortado = substr($texto, 0, $maxCaracteres);
 
	 // Buscamos la última posición del espacio en blanco en el texto cortado
	 // para no cortar en medio de una palabra.
	 $ultimoEspacio = strrpos($textoCortado, ' ');
 
	 // Si encontramos un espacio, cortamos el texto hasta ahí. Si no, devolvemos el texto cortado como está.
	 $textoCortado = $ultimoEspacio ? substr($textoCortado, 0, $ultimoEspacio) : $textoCortado;
 
	 // Añadimos "..." al final para indicar que el texto continúa.
	 return $textoCortado . '...';
 }
 