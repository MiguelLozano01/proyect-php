<?php

include_once 'lista.php';

class ApiLista{


    function getAll(){
        $lista = new lista();
        $listas = array();
        $listas["items"] = array();

        $respuesta = $lista->obtenerListas();
        if($respuesta->rowCount()){
            while ($row = $respuesta->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['id'],
                    "ciudad" => $row['ciudad'],
                    "precio_gasolina" => $row['precio_gasolina'],
                    "precio_acpm"=> $row['precio_acpm'],
                    "fecha_vigencia" => $row['fecha_publicacion'],
                );
                array_push($listas["items"], $item);
            }
        
            // echo json_encode($listas);
            $this->printJSON($listas);
        }else{
            // echo json_encode(array('mensaje' => 'No hay elementos'));
            $this->error('No hay elementos');
        }
    }
    function printJSON($array){
        echo  '<code>'.json_encode($array).'</code>';
    }
    function error($mensaje){
        echo '<code>'.json_encode(array('mensaje'=>$mensaje)).'</code>';
    }

    function getById($id){
        $lista = new lista();
        $listas = array();
        $listas["items"] = array();
    
        $respuesta = $lista->obtenerLista($id);

        if($respuesta->rowCount()==1){
            $row= $respuesta->fetch();
                $item=array(
                    "id" => $row['id'],
                    "ciudad" => $row['ciudad'],
                    "precio_gasolina" => $row['precio_gasolina'],
                    "precio_acpm"=> $row['precio_acpm'],
                    "fecha_vigencia" => $row['fecha_publicacion'],
                );
                array_push($listas["items"], $item);
        
            // echo json_encode($listas);
            $this->printJSON($listas);
        }else{
            // echo json_encode(array('mensaje' => 'No hay elementos'));
            $this->error('No hay elementos');
        }
    }

//     function getByFecha($fecha){
//         $lista = new lista();
//         $listas = array();
//         $listas["items"] = array();
    
//         $respuesta = $lista->obtenerPorFecha($id);
        
//         if($respuesta->rowCount()==1){
//             $row= $respuesta->fetch();
//                 $item=array(
//                     "id" => $row['id'],
//                     "ciudad" => $row['ciudad'],
//                     "precio_gasolina" => $row['precio_gasolina'],
//                     "precio_acpm"=> $row['precio_acpm'],
//                     "fecha_vigencia" => $row['fecha_publicacion'],
//                 );
//                 array_push($listas["items"], $item);
        
//             // echo json_encode($listas);
//             $this->printJSON($listas);
//         }else{
//             // echo json_encode(array('mensaje' => 'No hay elementos'));
//             $this->error('No hay elementos');
//         }
//     }
}

?>