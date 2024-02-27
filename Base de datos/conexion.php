<?php
$server='localhost';
$user='root';
$pass='';
$bd='bd-joye';
$conexion=mysqli_connect($server,$user,$pass,$bd, '3307');

if ($conexion) { echo ""; } else { echo "conexion not connected"; }
?>
