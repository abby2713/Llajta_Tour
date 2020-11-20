<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>

    <section class="login-content">
      <div class="logo">
        <img class="logo-Llajta" src="<?php echo base_url();?>assets/images/logoBC.png">
      </div>
      <div class="login-box">
      <?php
        //NOTIFIACIONES ERROR
        echo validation_errors('<div class="alert alert-warnig">','</div>');
        //NOTIFICACION

        if ($this->session->flashdata('warning')) {
                echo '<div class="alert alert-warning">';
                echo $this->session->flashdata('warning');
                echo '</div>';
        }
        //notificacion del login
        if($this->session->flashdata('sukses')){
            echo '<div class="alert alert-warning">';
            echo $this->session->flashdata('sukses'); 
            echo '</div>';
        }
            // cambiamo la direccion de base url por login   admin/inputsekolah
        echo form_open(base_url('login'),'class="login-form" entype="multipart/formdata"');
        ?>
          <!-- CREAMOS EL TEXBOX PARA EL USUARIO -->
        <br>
        
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN</h3>
          <div class="form-group">
            <label class="control-label">CORREO</label>
            <input type="text" name="usuario" class="form-control" placeholder="usuario">
          </div>
          <div class="form-group">
            <label class="control-label">CONTRASEÑA</label>
            <input type="password" name="password" class="form-control" placeholder="password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Registrate ahora</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>

        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Registro</h3>
          <div class="form-group">
            <label class="control-label">Nombre</label>
            <input class="form-control" type="text" placeholder="Ingrese su nombre">
          </div>
          <div class="form-group">
            <label class="control-label">Primer Apellido</label>
            <input class="form-control" type="text" placeholder="Ingrese su Primer Apellido">
          </div>
          <div class="form-group">
            <label class="control-label">Segundo Apellido</label>
            <input class="form-control" type="text" placeholder="Ingrese su Segundo Apellido">
          </div>
          <div class="form-group">
            <label class="control-label">Correo</label>
            <input class="form-control" type="email" placeholder="Ingrese su email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
          <div class="tile-footer" align="center">
              <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Registrar
            </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url();?>assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>