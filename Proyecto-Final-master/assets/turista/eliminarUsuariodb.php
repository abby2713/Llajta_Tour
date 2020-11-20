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
          $estado=$_POST['estado'];

          $sql="UPDATE usuarios SET estado='0' WHERE idUsuario='$idusuario'";

          if($mysqli->query($sql))
            {
              //echo "Registrado";
              header ("Location: IAdmin.php");
            }
            else
              {
              echo "No eliminado";
            }
          ?>
 


          
        </div>
      </div>
    </div>
  </div>
</div>

  </body>
</html>