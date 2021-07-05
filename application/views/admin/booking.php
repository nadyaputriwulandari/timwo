
<table class="table table-bordered">
  <tr>
    <th>ID</th>
    <th>KATEGORI</th>
    <th>NAMA VENDOR</th>
    <th>TANGGAL</th>
   
    <th colspan="2">AKSI</th>
</tr>

<?php
$no=1;
foreach ($book as $bk) : ?>
  
<tr>

  <td><?php echo $no++ ?></td>
  <td><?php echo $bk->kategori ?></td>
  <td><?php echo $bk->nama_vendor ?></td>
  <td><?php echo $bk->tanggal ?></td>
  
  <td><?php echo anchor('admin/booking/edit/' .$bk->id_booking, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div') ?></td>
  <td><?php echo anchor('admin/booking/hapus/' .$bk->id_booking, '<div class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></div') ?></td>

</tr>

<?php endforeach; ?>

</table>
</div>
      