<?php
    $mysqli= new mysqli("localhost", "root", "", "gestion");
    if ($mysqli->connect_errno){
        die ('Error en la conexion' . $mysqli->connect_errno);
    }
?>