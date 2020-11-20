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
          $apellidoPaterno=$_POST['apellidoPaterno'];
          $apellidoMaterno=$_POST['apellidoMaterno'];
          $nombres=$_POST['nombres'];
          $login=$_POST['login'];
          $password=$_POST['password'];
          
          $sql= "INSERT INTO usuarios SET apellidoPaterno='$apellidoPaterno',apellidoMaterno='$apellidoMaterno', nombres='$nombres', login='$login', password='$password';";

          $aErrores = array();
          $aMensajes = array();
            //apellidoPaterno
            if( empty($apellidoPaterno]) )
                $aErrores[] = "Debe especificar los apellidos";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
                if( preg_match($apellidoPaterno, $_POST['apellidoPaterno']) )
                    $aMensajes[] = "Apellidos: [".$_POST['apellidoPaterno']."]";
                else
                    $aErrores[] = "Los apellidos sólo pueden contener letras y espacios";
            }

            //apellidoMaterno
            if( empty($_POST['apellidoMaterno']) )
                $aErrores[] = "Debe especificar los apellidos";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contienen letras y espacios:
                if( preg_match($apellidoMaterno, $_POST['apellidoMaterno']) )
                    $aMensajes[] = "Apellidos: [".$_POST['apellidoMaterno']."]";
                else
                    $aErrores[] = "Los apellidos sólo pueden contener letras y espacios";
            }

            // Nombre:
            if( empty($_POST['nombres']) )
                $aErrores[] = "Debe especificar el nombre";
            else
            {
                // Comprobar mediante una expresión regular, que sólo contiene letras y espacios:
                if( preg_match($nombres, $_POST['nombres']) )
                    $aMensajes[] = "Nombre: [".$_POST['nombres']."]";
                else
                    $aErrores[] = "El nombre sólo puede contener letras y espacios";
            }


          if($mysqli->query($sql))
            {
              //echo "Registrado";
              header ("Location: IAdmin.php");
            }
            else
              {
              echo "No Registrado";
            }
          ?>
 


          
        </div>
      </div>
    </div>
  </div>
</div>

  </body>
</html>