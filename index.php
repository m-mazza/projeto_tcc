<?php include('inc/header.php');?>

    <?php include('inc/banner.php');?>

    <?php include('inc/categorias.php')?> 
    
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-12 col-sm-8 col-md-6">
                <nav class="my-4">
                    <?php include('inc/navigation.php')?>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="cardapio" role="tabpanel" aria-labelledby="cardapio-tab">
                        <div class="mb-5">
                            <?php include('inc/prodcard.php')?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pagamento" role="tabpanel" aria-labelledby="pagamento-tab">
                        <div class="my-5">
                            <?php include('inc/payment.php')?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="horas" role="tabpanel" aria-labelledby="horas-tab">
                        <div class="my-5">
                            <?php include('inc/restaurantinfo.php')?>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    
<?php include('inc/footer.php');?>
        
