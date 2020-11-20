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
          $idlugar=$_POST['idlugar'];
          $nombreLugar=$_POST['nombreLugar'];
          $direccion=$_POST['direccion'];
          $horarioAtencion=$_POST['horarioAtencion'];
          $foto=$_POST['foto'];

          $sql="UPDATE lugar SET nombreLugar='$nombreLugar', direccion='$direccion', horarioAtencion='$horarioAtencion', foto='$foto' WHERE idLugar='$idlugar';";


          if($mysqli->query($sql))
            {
              //echo "Registrado";
              header ("Location: Lugares.php");
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