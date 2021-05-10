<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="db_GoModa";
    $con= mysqli_connect($host,$user,$pass,$db) or die ("Error al conectar a la base de Datos");
    mysqli_set_charset($con,'utf8');
?>


