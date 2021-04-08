<?php

    require "crud.php";

    $objCrud = new Crud();

    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    

    $crear_persona = $objCrud->create(771,$name,$email);
    //$lst_personas = $objCrud->read();

    
    if($crear_persona->estado==false){
        echo "BAD JOB  !";
        print_r($crear_persona->mensaje);
    }else{
        //header('Location: index.php');
        echo "GOOD JOB!!!!";
        print_r($crear_persona->datos);
    }
    die();
    
?>