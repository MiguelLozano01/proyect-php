<?php

include_once 'db.php';

class Lista extends DB{
    
    function obtenerListas(){
        $query = $this->connect()->query('SELECT * FROM lista');
        return $query;
    }

    function obtenerLista($id){
        $query=$this->connect()->prepare('SELECT * FROM lista WHERE id = :id');
        $query->execute(['id' => $id]);

        return $query;
    }   
    // function obtenerListaPorFecha($fecha){
    //     $query=$this->connect()->prepare('SELECT * FROM lista WHERE fecha_publicacion = :fecha_vigencia');
    //     $query->execute(['fecha_vigencia' => $fecha]);

    //     return $query;
    // }   
}

?>