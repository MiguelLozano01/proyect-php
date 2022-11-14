<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
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
            <h3 style="text-align: center;">AGREGAR REGISTRO DE PRECIOS</h3>
        </div>

        <form class="form-horizontal" method="POST" action="guardar.php" enctype="multipart/form-data">
            <div class="form-group">
                <br>
                <label for="id" class="col-sm-2 control-label">Codigo de la ciudad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id" placeholder="Ej: 1">
                </div>
            </div>
            <div class="form-group">
                <br>
                <label for="ciudad" class="col-sm-2 control-label">Nombre de la ciudad</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ciudad" name="ciudad" >
                </div>
            </div>
            <div class="form-group">
                <br>
                <label for="precio_gasolina" class="col-sm-2 control-label">Gasolina MC($/gal)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="precio_gasolina" name="precio_gasolina" >
                </div>
            </div>
            <div class="form-group">
                <br>
                <label for="precio_acpm" class="col-sm-2 control-label">ACPM($/gal)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="precio_acpm" name="precio_acpm">
                </div>
            </div>
            <div class="form-group">
                <br>
                <label for="fecha_publicacion" class="col-sm-2 control-label">Vigencia apartir de</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion">
                </div>
            </div>
            <div class="form-group">
                <br>
                <div class="col-sm-offfset-2 col.sm-10">
                    <a href="perfil_admin.php" class="btn btn-default">Regresar</a>
                    <button class="btn btn-primary">Guardar</button>
                </div>

            </div>
        </form>

    </div>

</body>

</html>