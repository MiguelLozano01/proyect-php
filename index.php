<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/cabecera.css">
</head>
<body>
    <form action="validar.php" method="POST">
    <h1>Inicio de sesion</h1>
    <p>Usuario <input type="text" placeholder="Ingrese usuario" name="usuario"></p>
    <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
    <input type="submit" value="Ingresar">
    </form>
    

</body>
</html>