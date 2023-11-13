<?php include('inc/header.php')?>

<div class="container-cad">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-7">
                <div class="d-flex justify-content-center">
                    <img src="assets/img/logotipo/logo_app.png" class="w-50">
                </div>
                <br>
                <h3 class="mb-3 text-center">Criar Cadastro</h3>
                <br>
                <form id="cad-geral" method="POST">
                    <input type="hidden" name="cadastro" value="s">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="m-1">
                                <h5 class="mb-0 text-center">Informações da Loja</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>Razão Social</label>
                                    <input type="text" class="form-control" data-name="Razão Social" name="razaosocial">
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>Nome Fantasia</label>
                                    <input type="text" class="form-control" data-name="Nome Fantasia" name="nomefantasia">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>CNPJ</label>
                                    <input type="text" class="form-control cnpj" data-name="CNPJ" name="cnpj">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>Rua</label>
                                    <input type="text" class="form-control" data-name="Rua" name="rua">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>Nº</label>
                                    <input type="text" class="form-control" data-name="Número" name="numero">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>Bairro</label>
                                    <input type="text" class="form-control" data-name="Bairro" name="bairro">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>Cidade</label>
                                    <input type="text" class="form-control" data-name="Cidade" name="cidade">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>Estado</label>
                                    <input type="text" class="form-control" data-name="Estado" name="uf">
                                </div>
                            </div>
                        </div>   
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>CEP</label>
                                    <input type="text" class="form-control cep" data-name="CEP" name="cep">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-5 mb-1 mx-1">
                                <h5 class="mb-0 text-center">Informações do Usuário</h5>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>Nome</label>
                                    <input type="text" class="form-control" data-name="Nome" name="nome">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>CPF</label>
                                    <input type="text" class="form-control cpf" data-name="CPF" name="cpf">
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" data-name="E-mail" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label>Telefone</label>
                                    <input type="text" class="form-control telefone" data-name="Telefone" name="telefone">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-5 mb-0 mx-1 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Criar Cadastro</button> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('inc/footer.php')?>

<?php
    if(@$_POST['cadastro'] == "s") {

        // dados do gestor
        $nome           = mysqli_real_escape_string($conexao, trim($_POST["nome"]));
        $cpf            = mysqli_real_escape_string($conexao, trim($_POST["cpf"]));
        $email          = mysqli_real_escape_string($conexao, trim($_POST["email"]));
        $telefone       = mysqli_real_escape_string($conexao, trim($_POST["telefone"]));



        // dados do restaurante;
        $razaosocial    = mysqli_real_escape_string($conexao, trim($_POST["razaosocial"]));
        $nomefantasia   = mysqli_real_escape_string($conexao, trim($_POST["nomefantasia"]));
        $cnpj           = mysqli_real_escape_string($conexao, trim($_POST["cnpj"]));
        $rua            = mysqli_real_escape_string($conexao, trim($_POST["rua"]));
        $numero         = mysqli_real_escape_string($conexao, trim($_POST["numero"]));
        $bairro         = mysqli_real_escape_string($conexao, trim($_POST["bairro"]));
        $cidade         = mysqli_real_escape_string($conexao, trim($_POST["cidade"]));
        $estado         = mysqli_real_escape_string($conexao, trim($_POST["uf "]));
        $cep            = mysqli_real_escape_string($conexao, trim($_POST["cep"]));



        // insere dados na tabela restaurante
        $sqlrestaurante = "INSERT INTO restaurante (nm_restaurante, nm_fantasia, cd_cnpj, ds_rua, ds_num, ds_bairro, nm_cidade, cd_cep) 
        VALUES ('".$razaosocial."','".$nomefantasia."','".$cnpj."','".$rua."','".$numero."','".$bairro."','".$cidade."','".$cep."')";  
        GetBanco()->query($sqlrestaurante);

        $cdRestaurante = mysqli_insert_id(GetBanco());
        // insere dados na tabela gestor
        $sqlgestor = "INSERT INTO gestor (nm_gestor, cd_restaurante, cd_cpf, ds_email, cd_telefone)
        VALUES ('".$nome."', $cdRestaurante,'".$cpf."','".$email."','".$telefone."')";
        GetBanco()->query($sqlgestor); 
        ?>

        <script>
            $(document).ready(function() {
                $('.modal-header h4').html('Cadastro').css('color','#28a745');
                $('.modal-body p').html('Seu cadastro foi concluído com sucesso!').css('text-align','center');
                $('.modal-footer button').css('display', 'none');
                $('#modal_validation').modal('toggle');
                setTimeout(function() {
                    self.location = 'adm/login'; 
                }, 3500); 
            })
         </script>
    <?php    
    }
?>