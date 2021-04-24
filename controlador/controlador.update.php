<?php

require "./crud.php";

$idUpdate = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$objCrud = new Crud();

echo $idUpdate;

/*
if (isset($idUpdate)) {
    $objCrud->update($idUpdate, $name, $email);
}else {
    echo "error al modificar el dato";
}*/

