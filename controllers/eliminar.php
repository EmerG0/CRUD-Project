<?php include '../model/conection.php';

$idJuego = $_GET['id'];
$consulta = $bd->prepare("DELETE FROM games WHERE ID = ?");
$resultado = $consulta->execute([$idJuego]);

if ($resultado) {
    header("Location: ../index.php");
} else {
    echo "Fallo la consulta";
}
?>