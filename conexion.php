<?php
    //connection DataBase
    function connect()
    {
        $user="root";
        $pass="";
        $server="localhost";
        $db="crud-php";

        $link= mysqli_connect($server,$user,$pass,$db);
        if (!$link) {
            die('Could not connect'.mysql_error());
        }
        echo "Connected to DB crud-php";
        //mysql_close($link);
    }
?>