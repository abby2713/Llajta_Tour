<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Bootstrap</title>
    <meta charset="utf-8">
    <meta name="desc
    ription" content="bootstrap">
    <meta name="keywords" content="bootstrap, CSS, HTML5, Javascript">
    <meta name="author" content="DESARROLLADOR">

<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<div class="container">
  <h1>Bootstrap</h1>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title"></h4>

          <?php 
          include("config.php");
          $idusuario=$_POST['idusuario'];
          $apellidoPaterno=$_POST['apellidoPaterno'];
          $apellidoMaterno=$_POST['apellidoMaterno'];
          $nombres=$_POST['nombres'];
          $login=$_POST['login'];
          $password=$_POST['password'];
          $sql="UPDATE usuarios SET apellidoPaterno='$apellidoPaterno', apellidoMaterno='$apellidoMaterno', nombres='$nombres', login='$login', password='$password' WHERE idUsuario='$idusuario';";


          if($mysqli->query($sql))
            {
              //echo "Registrado";
              header ("Location: IAdmin.php");
            }
            else
              {
              echo "No modificado";
            }
          ?>
 


          
        </div>
      </div>
    </div>
  </div>
</div>

  </body>
</html>