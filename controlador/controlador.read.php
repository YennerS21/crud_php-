<?php

    require "./crud.php";
    
    $objCrud = new Crud();

    error_reporting(1);

    $ver_personas = $objCrud->read();

    
    if($ver_personas->estado==false){
        echo "BAD JOB  !";
        print_r($ver_personas->mensaje);
    }else{
        //header('Location: index.php');
        foreach ($ver_personas->datos as $persona => $value) {
            echo "<tr>";
            echo "<td>".$value['id_per']."</td>";
            echo "<td>".$value['per_name']."</td>";
            echo "<td>".$value['per_email']."</td>";
            echo "<td>".$value['status']."</td>";
            echo "<td>EDITAR</td>";
            echo "<td>ELIMINAR</td>";
            echo "</tr>";
        }
    }
    die();
    
?>