<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <h2 class="text-center latestitems">PAKET MUA</h2>
            </div>
        </div>

        <div class="row">
            <?php
<<<<<<< HEAD
            foreach ($mua as $key => $dkr) :
            ?>
                <div class="col-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 style="text-align:center;" class="card-title">VENDOR : <?php echo $dkr->nama_vendor ?></h4>
=======
            foreach ($mua as $key => $dkr) : ?>
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <h5 style="text-align: center;">VENDOR : <?php echo $dkr->nama_vendor ?></h5>
                            <span class="maxproduct"><img width="200px" style="text-align: center;" src="<?php echo base_url('assets_user/images/' . $dkr->foto) ?>"> </span>
>>>>>>> 566589a38ed54a5c589748a935ee5301e28bcf76
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