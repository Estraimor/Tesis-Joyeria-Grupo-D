<?php
$server='localhost';
$user='root'; // usuario de la base de datos
$pass='';// es una mala practiva no poner contraseña a la base de datos pero como es un trabajo local no la usamos
$bd='bd-joye'; // nombre de la BD
$conexion=mysqli_connect($server,$user,$pass,$bd, '3307'); //funcion de PHP para conectar con la base de datos

if ($conexion) { echo ""; } else { echo "conexion not connected"; } 
?>
