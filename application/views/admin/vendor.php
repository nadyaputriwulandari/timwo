
<table class="table table-bordered">
  <tr>
    <th>ID Vendor</th>
    <th>Nama Vendor</th>
    <th>No Telpon</th>
    <th>Alamat</th>
    <th>Kategori</th>
    <th>Status</th>
   
</tr>

<?php
$no=1;
foreach ($tb_vendor as $ve) : ?>
  
<tr>

  <td><?php echo $no++ ?></td>
  <td><?php echo $ve->nama_vendor ?></td>
  <td><?php echo $ve->no_telp_vendor ?></td>
  <td><?php echo $ve->alamat_vendor?></td>
  <td><?php echo $ve->kategori?></td>
   <td><?php echo $ve->status?></td>
  <td width="20px"><?php echo anchor('admin/vendor/update/' .$ve->kode_vendor,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
  <td width="20px"><?php echo anchor('admin/vendor/delete/' .$ve->kode_vendor,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?></td>
 

</tr>

<?php endforeach; ?>

</table>
</div>