<div class="container">
<h2>Edit User</h2>
<div class="row">
<form action="<?=base_url()?>admin/updatedata" method="post" enctype="multipart/form-data">


<input type="text" name="nombre" value="<?=$data->nombre?>"><br>
<input type="text" name="primerApellido" value="<?=$data->primerApellido?>"><br>
<input type="text" name="segundoApellido" value="<?=$data->segundoApellido?>"><br>
<input type="text" name="email" value="<?=$data->email?>"><br>


<label>foto</label><br>
<input type="file" name="fotopost"><br><br>

<!-- file lama -->
<input type="hidden" name="filelama" value="<?=$data->foto?>">
<!-- ID -->
<input type="hidden" name="idUsuario" value="<?=$data->idUsuario?>">

<input type="submit" name="submit" value="Submit" class="btn btn-default">
</form>

</div>
</div>



<!-- <div class="container">
<form action="<?=base_url()?>admin/updatedata" method="post" enctype="multipart/form-data">

<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Editar Usuario</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input type="text" name="nombre" value="<?=$data->nombre?>" class="form-control"  type="text" placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                  <label class="control-label">Primer Apellido</label>
                  <input type="text" name="primerApellido" value="<?=$data->primerApellido?>" class="form-control"  type="text" placeholder="Ingrese su Primer Apellido">
                </div>
                <div class="form-group">
                  <label class="control-label">Segundo Apellido</label>
                  <input type="text" name="segundoApellido" value="<?=$data->segundoApellido?>" class="form-control"  type="text" placeholder="Ingrese su Segundo Apellido">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input type="text" name="email" value="<?=$data->email?>" class="form-control"  type="email" placeholder="Ingrese su email">
                </div>
                <div class="form-group">
                </div>
                <div class="form-group">
                  <label class="control-label">Subir Foto</label>
                  <input class="form-control" name="fotopost" type="file">
                </div>

                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">I accept the terms and conditions
                    </label>
                  </div>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Editar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
        </div>
        <div class="clearix"></div>
      </div>



<!-- file lama -->
<input type="hidden" name="filelama" value="<?=$data->foto?>">
<!-- ID -->
<input type="hidden" name="idUsuario" value="<?=$data->idUsuario?>">


</form>

</div>
</div> -->
