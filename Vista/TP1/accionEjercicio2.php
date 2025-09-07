<?php
include_once "../Estructura/cabecera.php";


$datos = $_POST;
$objControl = new ControlTP1();
$salida = $objControl->ejercicio2($datos);

//echo "<p>Son en total  de ". $salida. " horas en la semana</p>";



    
    
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-2">
            <p class="fs-4 text-center">Son en total de <?php echo $salida; ?> horas en la semana</p>

            <div class="text-center">
                <a type="btn" class="btn btn-primary" href="Ejercicio2.php">Volver</a>
                <a type="btn" class="btn btn-primary" href="menuTp1.php">Ejercicios</a>
            </div>
        </div>
    </div>
</div>

<?php
//footer

?>