<?php include 'templates/header.php';?>

<?php include 'model/conection.php';
$sentencia = $bd->query("SELECT * FROM games");
$juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($juegos);
?>

<br>
<div class="container">
    <div class="row">
        <table class="table table-striped table-light table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Juego</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Calificacion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach($juegos as $dato) {?>
                <tr>
                    <th scope="row"><?php echo $dato->ID?></th>
                    <td><?php echo $dato->Juego?></td>
                    <td><?php echo $dato->Tipo?></td>
                    <td><?php echo $dato->Calificacion?></td>
                    <td>
                        <a href="controllers/editarForm.php?id=<?php echo $dato->ID?>" class="btn btn-primary">Editar</a>
                        <a href="controllers/eliminar.php?id=<?php echo $dato->ID?>" class="btn btn-danger"><img src="https://cdn.icon-icons.com/icons2/1660/PNG/512/3844460-can-trash_110351.png" width="25" height="25"></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>

        <div class="container">
            <div class="card mb-3">
                <div class="card-header">Ingrese un nuevo juego</div>
                    <form action="controllers/registro.php" method="POST">
                        <div class="mb-2 ml-2">
                            <label>Nombre</label>
                            <input class="form-control" type="text" placeholder="Ingrese nombre del juego" name="inputJuego" aria-label="default input example" required>
                        </div>
                        <div class="mb-2 ml-2">
                            <label>Tipo</label>
                            <input class="form-control" type="text" placeholder="Ingrese el tipo del juego " name="inputTipo" aria-label="default input example" required>
                        </div>
                        <div class="mb-2 ml-2">
                            <label>Calificacion</label>
                            <input class="form-control" type="number" placeholder="Ingrese que tanto le gusta el juego (0 al 5)" name="inputCalificacion" aria-label="default input example" required>
                        </div>
                        <input type="submit" class="btn btn-success mb-2 ml-2" value="Registrar">
                    </form>
                </div>
            <br><br>
        </div>
    </div>
</div>