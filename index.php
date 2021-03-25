<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Create, read, update, delete</title>
</head>
<body>
    <form action="registrar.php" method="POST">
        <label for="">Name</label>
        <input type="text" name="txtName" id="txtName">
        <label for="">Email</label>
        <input type="email" name="txtEmail" id="txtEmail">
        <input type="submit" value="Enviar">
    </form>
    <h1>Table records</h1>
    <table id="table-records">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
    </table>
</body>
</html>