
<table class="table table-bordered">
  <tr>
    <th>ID Vendor</th>
    <th>Nama Vendor</th>
    <th>Kategori</th>
    <th>Alamat</th>
    <th>Telephone</th>
    <th>Foto</th>
    <th>Harga</th>
    <th>Status</th>
    <th colspan="1">Verifikasi</th>
</tr>

<?php
$no=1;
foreach ($vendor as $ve) : ?>
  
<tr>

  <td><?php echo $no++ ?></td>
  <td><?php echo $ve->nama_vendor ?></td>
  <td><?php echo $ve->kategori ?></td>
  <td><?php echo $ve->alamat?></td>
  <td><?php echo $ve->telephone?></td>
  <td><?php echo $ve->foto?></td>
  <td><?php echo $ve->harga?></td>
   <td><?php echo $ve->status?></td>
  <td width="20px"><?php echo anchor('admin/vendor/update/' .$ve->id_vendor,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?></td>
 

</tr>

<?php endforeach; ?>

</table>
</div>