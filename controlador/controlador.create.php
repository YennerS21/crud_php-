<?php

    require "../crud.php";

    
    $objCrud = new Crud();

    error_reporting(1);

    $numID = $_POST['numID']; 
    $name = $_POST['txtName']; 
    $email = $_POST['txtEmail'];

    echo $name;

    if(isset($name)){
        header('Location: ../index.php');
        $objCrud->create($numID,$name, $email);
    }else {
        echo "error ";
    }

 ?>   