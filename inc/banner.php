
<div class="bannerIntro" data-banner="assets/img/institucional/restaurante.png"></div>

<div class="restauranteInfo">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <span class="restauranteStatus" data-clstatus="<?php echo$colorStatus?>">
                    <i class="las la-clock mr-1"></i>
                    <?php echo$txtStatus?>
                </span>
                <div class="RestaurantAddress">
                    <h5 class="mb-0"><?php echo$rowRestaurante['nm_fantasia'];?></h5>
                    <p class="text-secondary mb-0"><?php echo$rowRestaurante['ds_rua'].' '.$rowRestaurante['ds_num'].', '.$rowRestaurante['ds_bairro'].' - '.$rowRestaurante['cd_cep'].' - '.$rowRestaurante['nm_cidade'] ?></p>
                </div>
            </div>               
        </div>
    </div>
</div>
