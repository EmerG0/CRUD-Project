<?php include '../templates/header.php';?>

<?php include '../model/conection.php';

$idJuego = $_GET['id'];
$consulta = $bd->prepare("SELECT * FROM games WHERE ID = ?");
$consulta->execute([$idJuego]);
$juego = $consulta->fetch(PDO::FETCH_OBJ);
//print_r($juego);
?>

<div class="container">
            <div class="card mb-4">
                <div class="card-header">Edite los datos del juego</div>
                    <form action="editar.php" method="POST">
                        <div class="mb-2 ml-2 mr-2">
                            <label>Nombre</label>
                            <input class="form-control" type="text" placeholder="Edite nombre del juego" name="inputJuego" value = "<?php echo $juego->Juego?>" required>
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Tipo</label>
                            <input class="form-control" type="text" placeholder="Edite el tipo del juego " name="inputTipo" value = "<?php echo $juego->Tipo?>" required>
                        </div>
                        <div class="mb-2 ml-2 mr-2">
                            <label>Calificacion</label>
                            <input class="form-control" type="number" placeholder="Edite que tanto le gusta el juego (0 al 5)" name="inputCalificacion" value = "<?php echo $juego->Calificacion?>" required>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $juego->ID?>">
                        <input type="submit" class="btn btn-success mb-2 ml-2" value="Editar">
                    </form>
                </div>
            <br><br>
        </div>
    </div>
</div>