<?php
include_once "../../configuracion.php";

include_once "../Estructura/cabecera.php";



$datos = $_GET['num'];
$obj = new ControlTP1();
$salida = $obj->verNumeroEj1($datos);


?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p class="fs-4 text-center"><?php echo $salida; ?></p>

            <div class="text-center">
                <a type="btn" class="btn btn-primary" href="Ejercicio1VerNum.php">Volver</a>
                <a type="btn" class="btn btn-primary" href="menuTp1.php">Ejercicios</a>
            </div>
        </div>
    </div>
</div>
<?
//footer

?>