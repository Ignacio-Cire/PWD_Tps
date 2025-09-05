<?php



class verificaPass
{
    function verificarr($datos)
    {
        // Arreglo de usuarios válidos, simula DB
        $usuarios = [
            ["usuario" => "admin", "clave" => "1234"],
            ["usuario" => "user1", "clave" => "pass1"],
            ["usuario" => "user2", "clave" => "pass2"]
        ];

        // Verificar credenciales
        $acceso = false;
        foreach ($usuarios as $user) {
            if ($user["usuario"] == $datos["user"] && $user["clave"] == $datos["password"]) {
                $acceso = true;
                break;
            }
        }
        // Mostrar resultado
        if ($acceso) {
            return "Bienvenido " . $datos["user"];
        } else {
            return "Error: Usuario o contraseña incorrectos";
        }
    }
        
}
?>