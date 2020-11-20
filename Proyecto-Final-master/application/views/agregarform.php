<div class="container">



<div class="container">    
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading">INGRESE SUS DATOS</div>
        <div class="panel-body">

        <?php echo form_open_multipart('upload/file_data');?>

<div class="form-group">
  <label for="nombre">Ingrese Su Nombre</label>
  <input type="text" class="form-control" name="nombre" value="<?= set_value('nombre'); ?>" id="nombre" placeholder="nombre" required>
</div>

<div class="form-group">
  <label for="usuario">Ingrese Nombre De Usuario</label>
  <input type="text" class="form-control" name="usuario" value="<?= set_value('usuario'); ?>" id="usuario" placeholder="usuario" required>
</div>


<div class="form-group">
  <label for="password">Ingrese Su Contraseña</label>
  <input type="password" class="form-control" name="password" value="<?= set_value('password'); ?>" id="password" placeholder="password" maxlength="10" required>
</div>






<div class="form-group">
    <label for="exampleFormControlFile1">Ingrese Su Imagen</label>
    <input type="file"  name="foto" class="form-control-file" id="file"required>
  </div>

<a href="<?=base_url();?>home/selectCrud " class="btn btn-danger">Cancelar</a>
<button type="submit" class="btn btn-primary">Registrar Usuario</button>
</div>
</div>



</div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div>
</div>
