<?php
    //connection DataBase
    function connect()
    {
        $user="root";
        $pass="";
        $server="localhost";
        $db="crud-php";

        $con= mysqli_connect($server,$user,$pass,$db)or die ("ERROR CONNECTION".mysql_error());
        return $con;
    }
    connect();
?>