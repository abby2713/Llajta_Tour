<div class="container">
<?php echo form_open_multipart('home/agregar'); ?>
<button type="submit" class="btn btn-primary">Agregar <i class="fa fa-user "></i></button>
<a href="<?=base_url()?>admin/listaUsuarioPdf" class="btn btn-danger" type="submit">Exportar a PDF <i class="fa fa-file-pdf-o fa-2x"></i></a>
<a href="<?=base_url()?>export/export" class="btn btn-success" type="submit">Exportar a EXCEL <i class="fa fa-file-excel-o fa-2x"> </i> 
</a>


<?php echo form_close(); ?>
<br>  
<table class="table table-striped table-inverse table-responsive" id="tabel">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>IMAGEN</th>
      <th>NOMBRE</th>
      <th>USUARIO</th>
      <th>PASSWORD</th>
      <th style="width: 20px">EDIT</th>
       <th style="width: 20px">DELE</th>
    </tr>
    </thead>
    <tbody>
     <?php
     $indice=1;
     foreach ($login->result() as $row)  {
     ?>
     <tr>
     <td><?php echo $indice; ?></td>
     <td><a href="<?=base_url().'assets/uploads/'.$row->foto;?>" target="_blank"><img src="<?=base_url().'assets/uploads/'.$row->foto;?>  " width="45" height="55" class="img-circle"> </a></td>
     <td><?php echo $row->nombre; ?></td>
     <td><?php echo $row->usuario; ?></td>
     <td><?php echo $row->password; ?></td>

     <td>
     <?php echo form_open_multipart('home/modificar'); ?>
    <input type="hidden" name="id" value="<?php echo $row->id; ?>"></input>
    <button class="btn btn-warning  " type="submit" name="action">
    <i class="fa fa-pencil"></i></button>
    <?php echo form_close(); ?>
    </td>
    <td>
    <?php echo form_open_multipart('admin/eliminardb'); ?>
    <input type="hidden" name="id" value="<?php echo $row->id; ?>"></input>
    <input type="hidden" name="nombre" value="<?php echo $row->nombre; ?>"></input>
    <button type="submit" onclick="return confirm('desea eliminar...?')" class="btn btn-danger">
    <i class="fa fa-trash"></i></button>
    <?php echo form_close(); ?>
    </td>
     </tr>
     
     <?php
     $indice++;
     }
     ?>
    </tbody>
</table>
<br>
<br>
<br>
<br>















</div>