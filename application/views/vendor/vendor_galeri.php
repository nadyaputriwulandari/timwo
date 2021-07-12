<div class="container-fluid">



    <?php echo anchor('vendor/galeri/input_galeri', '<button class="btn btn-sm btn-primary mb-3"><i class=" fas fa-plus fa-sm"> Add Data</i></button>') ?>


    <table class="table table-bordered table-striped table-hover">
        <tr>

            <th>NO</th>
            <th>GAMBAR</th>
            <th>KATEGORI</th>
            <!-- <th colspan="2">Aksi</th> -->
        </tr>

        <?php
        $no = 1;
        foreach ($galeri as $ct) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?> </td>
                <td><?php echo $ct->gambar ?></td>
                <td><?php echo $ct->kategori ?></td>


                <!-- <td width="20px"><?php echo anchor('vendor/paket/update/' . $ct->id_paket, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td> -->
                <!-- <td width="20px"><?php echo anchor('vendor/paket/delete/' . $ct->id_paket, '<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td> -->
            </tr>
        <?php endforeach; ?>


    </table>

</div>