<?php

if (isset($_POST["ingresar"])) {
    $Login=$_POST['Login'];
    $Password=$_POST['Password'];
        include'config.php';
        $sql="SELECT * FROM usuarios WHERE login='$Login' AND password='$Password'";
        $execonsulta=$mysqli->query($sql) or die ("Error al comprobar usuario: ".mysqli_error($mysqli));
        $row=mysqli_fetch_array($execonsulta);

        
        if(mysqli_num_rows($execonsulta) > 0)
        {     
            print($row);       
            if ($row['tipo'] == 'Usuario') {
                echo '<script>';
                    echo 'alert("Bienvenido!!");';
                    echo 'window.location.href="IUsuario.php";';
                echo '</script>';
                //header ("Location: index.php");
            }
            else 
            {
                if ($row['tipo'] == 'Admin') 
                {
                    echo '<script>';
                        echo 'alert("Bienvenido!!");';
                        echo 'window.location.href="IUAdmin.php";';
                    echo '</script>';
                } 
            }                         
        }
        else
        {
            echo '<script>';
                echo 'alert("Usuario y/o Contraseña invalidos");';
                echo 'window.location.href="index.html";';
            echo '</script>';
        }
} 
        
       

?>



