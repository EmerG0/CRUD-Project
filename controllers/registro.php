<?php 
//print_r($_POST);

if (empty($_POST ['inputJuego']) || empty($_POST ['inputTipo']) || empty($_POST ['inputCalificacion'])) {
    echo "ERROR: LLene todos los campos";
    exit();
}

include '../model/conection.php';

$nommbreGame = $_POST['inputJuego'];
$tipo = $_POST['inputTipo'];
$calificacion = $_POST['inputCalificacion'];

echo $nommbreGame, $tipo, $calificacion;

$consulta = $bd->prepare("INSERT INTO games(Juego, Tipo, Calificacion) VALUES(?, ?, ?)");
$resultado = $consulta->execute([$nommbreGame, $tipo, $calificacion]);

if ($resultado) {
    header("Location: ../index.php");
} else {
    echo "Fallo la consulta";
}

?>