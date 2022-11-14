<?php
//valida la conexion a la base de datos
require 'conexion.php';
$where = '';


if(!empty($_POST))
{
    $valor = $_POST['dato'];
    if(!empty($valor)){
        $where = "WHERE lista LIKE %$valor%";
    }
}


//crear la consulta
$sql ="SELECT * FROM lista $where";
//ejecuta la consulta
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil admin</title>
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
                <li class="nav-item"><a href="consulta.php" class="nav-link active" aria-current="page">Publicaciones</a></li>
            </ul>
        </header>

        <div class="row" id="first">
            <form action="" <?php $_SERVER['PHP_SELF']; ?> method="POST">
                <input type="text" id="dato" name="dato" placeholder="Ciudad" />
                <input type="" id="enviar" name="enviar" value="Buscar" class="btn btn-primary" />
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

                         <td>
                            <a href="actualizar.php?id=<?php echo $row['id'];?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg><i class="bi bi-pencil-square"></i>
                            </a>
                        </td>

                        <td>
                            <a href="eliminar.php?id=<?php echo $row['id'];?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-trash" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-xs12 col-sm-6 col-md-6">
                <a href="insertar.php" class="btn btn-primary">Agregar publicación</a>
            </div>
            <div>
                <p>&nbsp;</p>
</body>

</html>