
      <div class="row">
        <div class="col-md-12">
          <form action="<?=base_url()?>home/tambah" method="post" enctype="multipart/form-data">
          <input type="submit" name="submit" value="REGISTRAR ESTUDIANTE" class="btn btn-default">
          </form>
          
          <table id="example" class="table table-striped table-bordered  table-hover" cellspacing="0" width="100%">
          <thead>
          <tr>
          <th class="th-sm">FOTO
          </th>
          <th class="th-sm">NOMBRE
          </th>
          <th class="th-sm">PRIMER APELLIDO
          </th>
          <th class="th-sm">SEGUNDO APELLIDO
          </th>
          <th class="th-sm">CORREO
          </th>
          </tr>
          </thead>
          <tbody>
          
          <?php
          $indice=1;
          foreach ($data as $data)  {
          ?>
          <tr>
          <td width="10%"><img  src="<?=base_url()?>assets/picture/<?=$data->foto?>"   alt="foto" width="65" height="65" ></td>
          <td><?php echo $data->nombre; ?></td>
          <td><?php echo $data->primerApellido; ?></td>
          <td><?php echo $data->segundoApellido; ?></td>
          <td><?php echo $data->email; ?></td>
          <td><?php echo $data->foto; ?></td>
          
          <td> <?php echo form_open_multipart('admin/EliminarContacto'); ?>
          <button type="submit" class="btn  btn-danger btn-sm" type="button" onclick="return confirm('desea eliminar')"><i class="fa fa-trash-o"></i>eliminar</button>
          <input type="hidden" name="idUsuario" value="<?php echo $data->idUsuario; ?>"></input>
          <?php echo form_close(); ?></td>
          <td>
          <a href="<?=base_url()?>admin/edit/<?=$data->idUsuario?>" class="btn btn-info" role="button">Editar</a>
          </td>
          </tr>
          <?php
          $indice++;
          }
          ?>
          </tbody>
          
          </table>
      </div>
    </main>