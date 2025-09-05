<?php
include_once "../estructura/cabecera.php";
include_once "../../utiles/funciones.php";


$datos = data_submitted();

$control = new verificaPass();
$respuesta = $control->verificarr($datos);  
echo $respuesta;

?>
<br>    