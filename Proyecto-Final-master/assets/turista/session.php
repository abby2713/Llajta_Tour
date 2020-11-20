<?php
session_start();
if (!isset($_SESSION['id'])){
header('location:index.html');
}
$idusuario = $_SESSION['id'];
$sql="SELECT * FROM usuarios WHERE idUsuario = '$idusuario';";
$execonsulta=$mysqli->query($sql);
$row=mysqli_fetch_array($execonsulta);
//$username = $row['apellidoPaterno']." ".$row['apellidoMaterno']." ".$row['nombres'];
//$session_query = $conn->query("SELECT * FROM usuarios WHERE idUsuario = '$session_id'");
//$user_row = $session_query->fetch();
//$username = $user_row['firstname']." ".$user_row['lastname'];
//$image = $user_row['image'];
?>