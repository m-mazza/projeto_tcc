<?php include('inc/header.php')?>
    <?php include('inc/navbar.php')?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('inc/navegacao-lateral.php')?>
            </nav>
            <main id="cadArea" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 mb-3 border-bottom">
                    <h3 class="h2 mb-0">Cadastro - Horário de Funcionamento</h3>
                </div>
                <div class="p-3" style="height:100vh">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <form id="" method="" action="">
                                        <div class="row no-gutters">
                                            <div class="col-3">
                                                <div class="m-1">
                                                    <div class="form-group mb-0">
                                                        <label for="">Dia da Semana</label>
                                                        <input type="text" class="form-control" data-name="" name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="m-1">
                                                    <div class="form-group mb-0">
                                                        <label for="">Horário - Entrada</label>
                                                        <input type="text" class="form-control" data-name="" name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="m-1">
                                                    <label for="">Horário - Saida</label>
                                                    <div class="form-group d-flex mb-0">
                                                        <input type="text" class="form-control w-50 mr-2" data-name="" name="">
                                                        <button type="submit" class="btn btn-primary w-50">Incluir Horário</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-6">
                            <div class="my-3">
                                <ul class="list-group">
                                    <li class="list-group-item bg-light d-flex align-items-center justify-content-between">
                                        <strong class="h6 mb-0">Dia da Semana | Entrada | Saída</strong> 
                                        <div class="btn-area-two">
                                            <a href="" class="btn btn-danger" title="deletar"><i class="fa-solid fa-trash"></i></a>
                                            <a href="" class="btn btn-primary" title="editar"><i class="fa-solid fa-pencil"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


<?php include('inc/footer.php')?>