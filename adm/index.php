<?php 
include('inc/header.php');?>
    <?php include('inc/navbar.php');?>
    
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('inc/navegacao-lateral.php')?>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 mb-3 border-bottom">
                    <h3 class="h2 mb-0"><?php echo$rowLoja['nm_fantasia']?></h3>
                </div>
                <div class="p-3" style="height:100vh">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <h4 class="mb-3">Informações da Loja</h4>
                            <div class="row no-gutters">
                                <div class="col-12 border">
                                    <div class="m-2">
                                        <label>Razão Social</label>
                                        <h6><?php echo$rowLoja['nm_restaurante']?></h6>
                                    </div>                      
                                </div>
                                <div class="col-7 border">
                                    <div class="m-2">                                   
                                        <label>Nome Fantasia</label>
                                        <h6><?php echo$rowLoja['nm_fantasia']?></h6>
                                    </div>                      
                                </div>
                                <div class="col-5 border">
                                    <div class="m-2">
                                        <label>CNPJ</label>
                                        <h6><?php echo$rowLoja['cd_cnpj']?></h6>
                                    </div>                      
                                </div>
                                <div class="col-6 border">
                                    <div class="m-2">
                                        <label>Rua</label>
                                        <h6><?php echo$rowLoja['ds_rua']?></h6>
                                    </div>
                                </div>
                                <div class="col-2 border">
                                    <div class="m-2">
                                        <label>Nº</label>
                                        <h6><?php echo$rowLoja['ds_num']?></h6>
                                    </div>
                                </div>
                                <div class="col-4 border">
                                    <div class="m-2">
                                        <label>Bairro</label>
                                        <h6><?php echo$rowLoja['ds_bairro']?></h6>
                                    </div>
                                </div>
                            </div>    
                            <?php
                                // dados do Gestor
                                $sqlGestor      = "SELECT * FROM gestor WHERE cd_restaurante = $cdRest";
                                $dadosGestor    = $conexao->query($sqlGestor);
                                $rowGestor      = $dadosGestor->fetch_assoc();
                            ?>
                            <br>
                            <br>
                            <h4 class="mb-3">Informações do Usuário</h4>
                            <div class="row no-gutters">
                                <div class="col-12 border">
                                    <div class="m-2">
                                        <label>Nome</label>
                                        <h6><?php echo$rowGestor['nm_gestor']?></h6>
                                    </div>                      
                                </div>
                                <div class="col-7 border">
                                    <div class="m-2">                                   
                                        <label>Email</label>
                                        <h6><?php echo$rowGestor['ds_email']?></h6>
                                    </div>                      
                                </div>
                                <div class="col-5 border">
                                    <div class="m-2">
                                        <label>Telefone</label>
                                        <h6><?php echo$rowGestor['cd_telefone']?></h6>
                                    </div>                      
                                </div>
                            </div>
                            <br>
                            <br>
                            <h4 class="mb-3">Cadastrar Horário de Funcionamento</h4>
                            <a href="cad-funcionamento" class="btn btn-primary">Incluir horários</a>
                        </div>
                        <div class="col-6">
                            <div class="mx-4">
                                <h4 class="mb-3">Alterar Cadastro</h4>
                                <h6 class="mb-0">Deseja <strong>alterar</strong> seu cadastro? Envie o formulário abaixo com os dados novos completos e nossa equipe, <strong>após a análise de sua solicitação</strong>, entrará em contato com você.</h6> 
                                <br>
                                <br>
                                <form>
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="m-1">
                                                <h6 class="mb-0">Informações da Loja</h6>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="m-1">
                                                <div class="form-group mb-0">
                                                    <label>Razão Social</label>
                                                    <input type="text" class="form-control" data-name="" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="m-1">
                                                <div class="form-group mb-0">
                                                    <label>Nome Fantasia</label>
                                                    <input type="text" class="form-control" data-name="" name="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="m-1">
                                                <div class="form-group mb-0">
                                                    <label>CNPJ</label>
                                                    <input type="text" class="form-control" data-name="" name="">
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
                                                <h6 class="mb-0">Informações do Usuário</h6>
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
                                            <div class="mt-3 mb-0 mx-1">
                                                <button type="submit" class="btn btn-primary">Enviar Solicitação</button> 
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

<?php include('inc/footer.php')?>
