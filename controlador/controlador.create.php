<?php

    include_once "C:\Apache24\htdocs\crud_php-\crud.php";


    $numID = $_POST['numID']; 
    $name = $_POST['txtName']; 
    $email = $_POST['txtEmail'];
    $objCrud = new Crud();


    if(isset($name)){
        header('Location: ../index.php');
        $objCrud->create($numID,$name, $email);
    }else {
        echo "error ";
    }

 ?>   