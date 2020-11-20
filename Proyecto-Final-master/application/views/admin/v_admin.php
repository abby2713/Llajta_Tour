
      <form action="<?=base_url()?>admin/insertdata" method="post" enctype="multipart/form-data">
<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Registrar Usuario</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input class="form-control" name="nombre" type="text" placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                  <label class="control-label">Primer Apellido</label>
                  <input class="form-control" name="primerApellido" type="text" placeholder="Ingrese su Primer Apellido">
                </div>
                <div class="form-group">
                  <label class="control-label">Segundo Apellido</label>
                  <input class="form-control" name="segundoApellido" type="text" placeholder="Ingrese su Segundo Apellido">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" name="email" type="email" placeholder="Ingrese su email">
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
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
          </div>
        </div>
        <div class="clearix"></div>
      </div>
      </form>

      
      
     