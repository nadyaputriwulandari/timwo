<table class="table table-bordered">
  <br>
  <h5 align="center">TABEL PESANAN</h5>
  <tr>
    <th>NO</th>
    <th>ID PESAN</th>
    <th>ORDER ID</th>
    <th>ID PAKET</th>
    <th>HARGA</th>
    <th>TANGGAL ACARA</th>

    <th>AKSI</th>
  </tr>

  <?php
  $no = 1;
  foreach ($book as $bk) : ?>

    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $bk->id_pesan ?></td>
      <td><?php echo $bk->order_id ?></td>
      <td><?php echo $bk->id_paket ?></td>
      <td><?php echo $bk->harga ?></td>
      <td><?php echo $bk->tgl_acara ?></td>

      <!-- <td><?php echo anchor('admin/booking/edit/' . $bk->id_pesan, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div') ?></td> -->
      <td><?php echo anchor('admin/booking/hapus/' . $bk->id_pesan, '<div class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></div') ?></td>

    </tr>
  <?php endforeach; ?>
</table>
</div>