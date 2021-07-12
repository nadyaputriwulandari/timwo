<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <h2 class="text-center latestitems">PAKET MUA</h2>
            </div>
        </div>

        <div class="row">
            <?php
            foreach ($mua as $key => $dkr) : ?>
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <h5 text align="center">VENDOR : <?php echo $dkr->nama_vendor ?></h5>
                            <span class="maxproduct"><img width="350px" height="200px" src="<?php echo base_url('assets_user/images/' . $dkr->foto) ?>"> </span>
                        </div>
                        <div class="product-details">
                            <h1>Paket MUA <?php echo $dkr->paket ?></h1>
                            <h6 align="center"><?php echo $dkr->deskripsi ?><h6>
                                    <span class="price">
                                        <h6 align="center" class="edd_price">Rp. <?php echo $dkr->harga ?></h6>
                                        <fieldset id="edd_purchase_submit">
                                            <input type="hidden" name="edd_action" value="purchase">
                                            <input type="hidden" name="edd-gateway" value="manual">
                                            <!-- <a href="<?php echo base_url('user/booking/index/' . $dkr->kode_vendor . '/' . $dkr->id_paket) ?> "> -->
                                        </fieldset>
                                    </span>

                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
    </div>
</section>