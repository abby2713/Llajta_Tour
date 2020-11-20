<?php
$hostname="localhost:3306";
$usuario="root";
$password="";
$database="web1";
$mysqli=new mysqli($hostname, $usuario, $password,$database);
// Verifica la conexión
//if ($mysqli->connect_error){
 //die("La conexión falló: " . $mysqli->connect_error);
//}
//echo "La Conexion se ha iniciado exitosamente";
//$mysqli -> set_charset("utf8");//muy importante
//?>