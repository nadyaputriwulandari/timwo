<section class="item content">
    <div class="container toparea">
        <div class="underlined-title">
            <div class="editContent">
                <h1 class="text-center latestitems">PAKET FOTOGRAFER</h1>
            </div>
        </div>

        <div class="row">
            <?php
            foreach ($fotografer as $key => $ftg) : ?>
                <div class="col-md-4">
                    <div class="productbox">
                        <div class="fadeshop">
                            <h5 text align="center">VENDOR : <?php echo $ftg->nama_vendor ?></h5>
                            <span class="maxproduct"><img width="350px" height="200px" src="<?php echo base_url('assets_user/images/' . $ftg->foto) ?>"> </span>
                        </div>
                        <div class="product-details">
                            <a href="#">
                                <h1>Paket Fotografer <?php echo $ftg->paket ?></h1>
                                <p><?php echo $ftg->deskripsi ?><p>
                            </a>
                            <span class="price">
                                <span class="edd_price">Rp. <?php echo $ftg->harga ?></span>
                                <fieldset id="edd_purchase_submit">
                                    <input type="hidden" name="edd_action" value="purchase">
                                    <input type="hidden" name="edd-gateway" value="manual">
                                    <a href="<?php echo base_url('user/booking/index/' . $ftg->kode_vendor . '/' . $ftg->id_paket) ?> ">
                                        <input type="button" class="edd-submit button" id="edd-purchase-button" name="edd-purchase" value="Booking"></a>
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