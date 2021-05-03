<?php
/**---- Datos de la función suma()-----
*
*
*La función suma(), devuelve la suma de dos
*números, pasado a las variable int a y int b.
*
*@version 7.7.24-ObuntuO.18.04.7 
*@author José Fernández Silva.
*@param enteros tipo int
*@return la suma de dos números.
*@internal Solo suma enteros y negativos
*
*/
function suma(int a, int b){
	return $a + $b;
}


/**---- Datos de la función campoNombre()----
*
* 
*La función campoNombre(), valida el campo nombre
*del formulario evitando que el usuario introduzca
*caracteres no permitido y lo deje en blanco.
*
*@version 7.7.24-ObuntuO.18.04.7 
*@author José Fernández Silva.
*@param string
*@return boleano.
*@internal Se valida con una expresión reglular
*
*/
function campoNombre(){
	$inputForm = "nombre";
	$mensajeErrorVacio = "Debes introducir tu nombre";
	$mensajeErrorEntrada = "Debe contener solo letras";
}


/*-----Nombre del autor de este documento----*/
echo '<p>Autor: Jose Fernandez Silva</p>'
?>
