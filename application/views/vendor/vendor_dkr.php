<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <h3 align="center">PAKET DEKORASI</h3>
                <br>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($dekorasi as $key => $dkr) : ?>
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <h5 text align="center">VENDOR : <?php echo $dkr->nama_vendor ?></h5>
                            <span class="maxproduct" width="200px"><img width="400px" height="200px" src="<?php echo base_url('assets_user/images/' . $dkr->foto) ?> "> </span>
                        </div>
                        <div class="product-details">
                            <a href="#">

                                <h5 align="center">Paket Dekorasi <?php echo $dkr->paket ?></h5>
                                <h6 align="center"><?php echo $dkr->deskripsi ?></h6>
                            </a>
                            <span class="price">
                                <h6 align="center">Rp. <?php echo $dkr->harga ?></h6>
                                <fieldset id="edd_purchase_submit">
                                    <input type="hidden" name="edd_action" value="purchase">
                                    <input type="hidden" name="edd-gateway" value="manual">
                                    <a href="<?php echo base_url('user/booking/index/' . $dkr->kode_vendor . '/' . $dkr->id_paket) ?> ">
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