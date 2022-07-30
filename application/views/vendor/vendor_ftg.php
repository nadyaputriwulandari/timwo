<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <h1 class="text-center latestitems">PAKET FOTOGRAFER</h1>
            </div>
        </div>


        <div class="row">
            <?php
            foreach ($fotografer as $key => $ftg) :
            ?>
                <div class="col-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">VENDOR : <?php echo $ftg->nama_vendor ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img width="300px" height="250px" src="<?php echo base_url('assets_user/images/' . $ftg->foto) ?>">
                                    <h5 style="text-align:center ;">Paket Fotografer <?php echo $ftg->paket ?></h5>
                                    <p style="text-align:center ;"><?php echo $ftg->deskripsi ?>
                                    <p style="text-align:center ;">
                                        Rp <?= number_format($ftg->harga, 0, ",", "."); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
</section>