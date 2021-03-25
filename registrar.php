<?php 
include('conexion.php');
$conn= connect();

if(isset($_POST)){
    $name = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    
    $sql = "INSERT INTO persona (`id`, `name`, `email`, `date_creation`, `date_update`, `status`) 
                VALUES (NULL', '$name', '$email', '1999-06-21', '1999-06-21', '0')";
    
    if($conn->mysqli_query($sql)=== true){
        echo "guardado con exito";
    }
    else{
        echo "error";
    }

}

?>