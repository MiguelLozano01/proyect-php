<?php
//VALIDA LA CONEXION A LA BASE DE DATOS
require 'conexion.php';
//traer los datos insertados en el formulario
$id = $_GET['id'];
// crear la consulta sql para eliminar el producto
$sql = "DELETE  FROM lista WHERE id = '$id'";
$resultado = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <p>&nbsp;</p>
    <div class="container">
        <div class="row">
            <div class="row" style="text-align: center;">
                <?php if($resultado) { ?>
                <h3>REGISTRO ELIMINADO</h3>
                <?php } else { ?>
                <h3>ERROR AL ELIMINAR</h3>
                <?php } ?>
                <br>
                <a href="perfil_admin.php" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
</body>

</html><?php
//VALIDA LA CONEXION A LA BASE DE DATOS
require 'conexion.php';
//traer los datos insertados en el formulario
$id = $_GET['id'];
// crear la consulta sql para eliminar el producto
$sql = "DELETE  FROM lista WHERE id = '$id'";
$resultado = $mysqli->query($sql);

?>
