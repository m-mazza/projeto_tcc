<?php include('inc/header.php');?>

    <div id="entrada">
        <div class="container">
            <div class="row justify-content-center no-gutters">
                <div class="col-12 col-sm-8 col-md-5">
                    <div class="entradaWrapper">
                        <div class="logoWrapper">
                            <img src="assets/img/logotipo/logo_app.png">
                        </div>
                        <div class="loginArea">
                            <div class="restauranteArea">
                                <div class="infoWrapper">
                                    <h5>Bem-vindo ao</h5>
                                    <h5><strong>McDonald's | Santa Casa</strong></h5>
                                </div>
                                <div class="loginWrapper">
                                    <a href="main" class="btn btn-primary w-100 <?php echo$close?>" >ENTRAR E FAZER PEDIDO</a></a>
                                </div>
                                <?php echo $warning?>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>

<?php include('inc/footer.php');?>

