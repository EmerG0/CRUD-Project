<?php include '../model/conection.php';

$idJuego = $_POST['id'];
$nombre = $_POST['inputJuego'];
$tipo = $_POST['inputTipo'];
$calificacion = $_POST['inputCalificacion'];

$consulta = $bd->prepare("UPDATE games SET Juego = ?, Tipo = ?, Calificacion = ? WHERE ID = ?");
$respuesta = $consulta->execute([$nombre, $tipo, $calificacion, $idJuego]);

if ($respuesta) {
    header("Location: ../index.php");
} else {
    echo "Fallo la consulta";
}
?>