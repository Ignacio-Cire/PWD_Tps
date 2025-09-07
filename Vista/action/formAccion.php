<?php

// Detectamos si viene por POST o GET
$accion = $_POST['accion'] ?? $_GET['accion'] ?? null;

switch ($accion) {

    case 'verNumero':
        include_once '../../Controllers/TP1/verNumeroController.php';
        break;

    case 'calcularHoras':
        include_once '../../Controllers/TP1/verHorasController.php';
        break;

    case 'mostrarPersona':
        include_once '../../Controllers/TP1/personaController.php';
        break;

    case 'operacionMatematica':
        include_once '../../Controllers/TP1/operacionController.php';
        break;

    case 'entradaCine':
        include_once '../../Controllers/TP1/entradaCineController.php';
        break;

    case 'verNumero2':
        include_once '../../Controllers/TP2/verNumeroController.php';
        break;
    
    case 'calcularHoras2':
        include_once '../../Controllers/TP2/verHorasController.php';
        break;
    
    case 'mostrarPersona2':
        include_once '../../Controllers/TP2/personaController.php';
        break;
    
    case 'operacionMatematica2':
        include_once '../../Controllers/TP2/operacionController.php';
        break;
    
    case 'entradaCine2':
        include_once '../../Controllers/TP2/entradaCineController.php';
        break;
    
    case 'cargarPelicula':
        include_once '../../Controllers/TP2/peliculaController.php';
        break;
    case 'login':  
        include_once '../../Controllers/TP2/verificarPass.php';
        break;
        
    case 'subirArchivo':
        include_once '../../Controllers/TP3/archivoController.php';
        break;

    case 'mostrarTxt':
    include_once '../../Controllers/TP3/mostrarTxtController.php';
    break;
    
    default:
        echo "<p>Acción no reconocida o no especificada.</p>";
        break;
}
