<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $db =  "db_gomoda";

    $con = mysqli_connect($host,$user,$password, $db);

if(!$con){
    die("No hay conexion".mysqli_connect_error());
}
$usuario = $_POST["username"];

$contraseña = $_POST["Contraseña"];

$query = mysqli_query($con, "SELECT * FROM t_inve_funcionario WHERE correo = '".$usuario."' and contraseña ='".$contraseña."'");

$nr = mysqli_num_rows($query);

if($nr || mysqli_num_rows($query) == 1){
   header("Location:../Vista/index2.php");
}else if($nr || mysqli_num_rows($query)== 0){
    header("Location:../Vista/login.php");
}

?>