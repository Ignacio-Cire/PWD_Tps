<?php
include_once "../Estructura/cabecera.php";



$datos = data_submitted();

$control = new verificaPass();
$respuesta = $control->verificarr($datos);  
echo $respuesta;

?>
<br>    