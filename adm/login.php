<?php include('inc/header.php')?>


    <div class="container">
        <div class="loginAdmArea">
            <div class="col-12 col-sm-11 col-md-7 col-lg-5">
                <div class="institucionalWrapper">
                    <img src="../assets/img/logotipo/logo_app_v2.png">
                </div>
                <div class="loginAdmContent">
                    <div class="col-12">
                        <h5 class="text-center mb-3">Acesse sua conta.</h5>
                    </div>
                    <form id="admLogin" action="login-action" method="POST">
                        <div class="form-group">
                            <input type="email" class="form-control" data-name="E-mail" name="email" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control cpf" data-name="CPF" name="cpf" placeholder="Digite seu CPF">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">ENTRAR</button>
                    </form>
                </div>
                <div class="redefinirArea">
                    <small>Esqueceu sua senha? <br><strong><a href="">Clique aqui</a></strong> para redefini-la.</small>
                </div>
            </div>
        </div>
    </div>


<?php include('inc/footer.php')?>

<?php 
    if (@$_GET['erro'] == 'true') { ?>
         
        <script>
            $(document).ready(function() {
                $('.modal-header h4').html('ACESSO NEGADO').css('color','#c82333');
                $('.modal-body p').html('Credenciais de acesso não conferem.').css('text-align','center');
                $('.modal-footer button').css('display', 'none');
                $('#modal_validation').modal('toggle');
                setTimeout(function() {
                    self.location = 'login'; 
                }, 3500); 
            })
        </script>

<?php }?>