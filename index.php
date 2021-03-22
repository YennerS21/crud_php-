<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create, read, update, delete</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Nombres</label>
        <input type="text" name="name" id="name">
        <label for="">Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Enviar">
    </form>
    <h1>Tabla de registros</h1>
    <table>
        <?php
            include("conexion.php");

            $con=connect();
            echo $con;
        ?>
    </table>
</body>
</html>