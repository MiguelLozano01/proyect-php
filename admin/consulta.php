<?php
//valida la conexion a la base de datos
require 'conexion.php';
$where = '';
$busqueda='';
if (isset($_GET['enviar'])){
    $busqueda =$_GET['fecha'];
    //crear la consulta
    //ejecuta la consulta
}
$sql= "SELECT * FROM `lista` WHERE (SELECT month(fecha_publicacion))='$busqueda' OR (SELECT year(fecha_publicacion)) ='$busqueda'";
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <p>&nbsp;</p>
        <div class="row">
            <h2 style="text-align: center;">PRECIOS COMBUSTIBLE LIQUIDOS</h2>
        </div>
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="perfil_admin.php" class="nav-link active" aria-current="page">Consulta General</a></li>
            </ul>
        </header>

        <div class="row" id="second">
            <form action="" <?php $_SERVER['PHP_SELF']; ?> method="GET">
            <p>Ingrese el mes o el año en valor numerico</p>
                <input type="text" id="fecha" name="fecha" placeholder="año o mes de publicacion" />
                <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-primary" />
            </form>
        </div>

        <div class="row table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Ciudad</th>
                        <th>Gasolina MC($/gal)</th>
                        <th>ACPM($/gal)</th>
                        <th>Vigencia a partir de</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <?php
                    while($row =$resultado->fetch_array(MYSQLI_ASSOC)){
                        ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['ciudad']?></td>
                        <td><?php echo $row['precio_gasolina']?></td>
                        <td><?php echo $row['precio_acpm']?></td>
                        <td><?php echo $row['fecha_publicacion']?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
                    </div>
                <p>&nbsp;</p>
</body>

</html>