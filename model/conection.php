<?php

$nombre_bd = "fav_games";
$usuario = "root";
$contraseña = "";

try {
    $bd = new PDO(
        'mysql:host=localhost;
        dbname='.$nombre_bd,
        $usuario,
        $contraseña
    );
} catch (Exception $e) {
    echo "No funciono la conexion porque: ".$e->getMessage();
}

?>