<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <h1 class="text-center latestitems">PAKET MC</h1>
            </div>
        </div>

        <div class="row">
            <?php
            foreach ($mc as $key => $dkr) :
            ?>
                <div class="col-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">VENDOR : <?php echo $dkr->nama_vendor ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <img width="300px" height="250px" src="<?php echo base_url('assets_user/images/' . $dkr->foto) ?>">
                                    <h5 style="text-align:center ;">Paket Fotografer <?php echo $dkr->paket ?></h5>
                                    <p style="text-align:center ;"><?php echo $dkr->deskripsi ?>
                                    <p style="text-align:center ;">
                                        Rp <?= number_format($dkr->harga, 0, ",", "."); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
    </div>
</section>