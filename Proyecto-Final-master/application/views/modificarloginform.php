


<div class="container">    
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-primary">
        <div class="panel-heading">PORFAVOR INGRESE LOS NUEVOS VALORES</div>
        <div class="panel-body">


          <div class="container">
<?php
foreach ($login->result() as $row) {
?>
<?php echo form_open_multipart('admin/modificardb'); ?>

<div class="row">
    <div class="col-sm-6">
<input type="hidden" name="id"  value="<?php echo $row->id; ?>"></input>

<div class="form-row">
    <div class="form-group col-md-7">
      <label for="inputCity">nombre</label>
      <input type="text" name="nombre" class="form-control" value="<?php echo $row->nombre; ?>"></input><br>
    </div></div>

    <div class="form-row">
    <div class="form-group col-md-7">
      <label for="inputCity">usuario</label>
<input type="text" name="usuario" class="form-control" value="<?php echo $row->usuario; ?>"></input><br>
    </div></div>

    <div class="form-row">
    <div class="form-group col-md-7">
      <label for="inputCity">password</label>
<input type="text" name="password" class="form-control" value="<?php echo $row->password; ?>"></input><br>
      
    </div></div>




    <div class="form-row">
    <div class="form-group col-md-12">
     
<button type="submit" class="btn btn-primary">modifica</button>
    <a href="<?=base_url()?>home/selectCrud " class="btn btn-danger" type="submit">cancelar</a>
    </div></div>


<?php echo form_close(); ?>
<?php
}
?>
</div>




        </div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div>

