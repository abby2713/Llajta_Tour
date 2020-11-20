
<form action="<?=base_url()?>home/tambah" method="post" enctype="multipart/form-data">
<input type="submit" name="submit" value="REGISTRAR ESTUDIANTE" class="btn btn-default">
</form>

<table id="example" class="table table-striped table-bordered  table-hover" cellspacing="0" width="100%">
<thead>
<tr>
<th class="th-sm">LOGO
</th>
<th class="th-sm">TIPO EMPLEO
</th>
<th class="th-sm">DESCRIPCION
</th>
<th class="th-sm">ACCIONES
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
<td><?php echo $data->Par_descripccion; ?></td>
<td><?php echo $data->Par_direccion; ?></td>
<td><?php echo $data->Par_horarioAtencion; ?></td>
<td><?php echo $data->Par_precioIngreso; ?></td>


<td> <?php echo form_open_multipart('home/EliminarContacto'); ?>
<button type="submit" class="btn  btn-danger btn-sm" type="button" onclick="return confirm('desea eliminar')"><i class="fa fa-trash-o"></i>eliminar</button>
<input type="hidden" name="idParque" value="<?php echo $data->idParque; ?>"></input>
<?php echo form_close(); ?></td>
<td>
<a href="<?=base_url()?>home/edit/<?=$data->idParque?>" class="btn btn-info" role="button">Editar</a>
</td>
</tr>
<?php
$indice++;
}
?>
</tbody>

</table>