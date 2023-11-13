<?php include('inc/header.php');?>
    <?php include('inc/navbar.php');
    

        if(isset($_GET["action"]) && $_GET["action"] == "delete") {
            $catProd = "DELETE FROM categoria WHERE cd_restaurante = $cdRest AND cd_categoria = ".$_GET["id"];
            $resultCatProd = $conexao->query($catProd);
            header("Location: ../adm/cad-categoria?mensagem=true");

        } else if(isset($_GET["id"])){
            $catProd = "SELECT * FROM categoria WHERE cd_restaurante = $cdRest AND cd_categoria = ".$_GET["id"];
            $resultCatProd = $conexao->query($catProd);
            $categoria = $resultCatProd->fetch_assoc();
        }
    
    ?>
    
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('inc/navegacao-lateral.php')?>
            </nav>
            <main id="cadArea" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 mb-3 border-bottom">
                    <h3 class="h2 mb-0"><?php echo isset($categoria)?"Editar":"Cadastrar"?> Categoria</h3>
                </div>
      
                <div class="p-3" style="height:100vh">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <form id="cadCateg" method="POST">
                                <input type="hidden" name="idcategoria" value="<?php echo isset($categoria)?$categoria["cd_categoria"]:"" ?>">
                                <input type="hidden" name="cadCategor" value="s">
                                <div class="row no-gutters">
                                    <div class="col-12 col-md-5">
                                        <label>Nome da Categoria</label>
                                        <div class="form-group d-flex mb-0">                                                
                                            <input type="text" class="form-control" data-name="Nome da Categoria" name="categ" value="<?php echo isset($categoria)?$categoria["nm_categoria"]:"" ?>">&nbsp;
                                            <button type="submit" class="btn btn-<?php echo isset($categoria)?"warning":"primary"?> w-50"><?php echo isset($categoria)?"Atualizar":"Cadastrar"?> Categoria</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>                   
                        </div>
                        <?php 
                        $catProd = "SELECT * FROM categoria WHERE cd_restaurante = $cdRest";
                        $resultCatProd = $conexao->query($catProd);
                        $linhasCatProd = $resultCatProd->num_rows; 
                        if($linhasCatProd > 0) {?>
                        <div class="col-12">
                            <div class="mx-1">
                                <h5 class="mb-2">Categorias Cadastradas</h5>
                            </div>
                        </div>
                        <?php while($rowCtPrd = $resultCatProd->fetch_assoc()) { ?>                        
                        <div class="col-12 col-md-6">
                            <div class="m-1">
                                <ul class="list-group">
                                    <li class="list-group-item bg-light d-flex align-items-center justify-content-between">
                                        <strong class="h6 mb-0"><?php echo$rowCtPrd["nm_categoria"]?></strong> 
                                        <div class="btn-area">
                                            <a href="cad-categoria?id=<?php echo$rowCtPrd["cd_categoria"]?>&action=delete" class="btn btn-danger" title="deletar"><i class="fa-solid fa-trash"></i></a>
                                            <a href="cad-categoria?id=<?php echo$rowCtPrd["cd_categoria"]?>" class="btn btn-primary" title="editar"><i class="fa-solid fa-pencil"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php };
                        } else {?>
                        <div class="col-12">
                            <div class="mx-1 my-3">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex align-items-center justify-content-center">
                                        <strong class="h6 mb-0">você não tem <strong>categorias</strong> cadastradas aindas.</strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php }; ?>
                    </div>
                </div>
            </main>
        </div>
    </div>

<?php include('inc/footer.php')?>

<?php
     if(@$_POST['cadCategor'] == "s") {
 
        $nomeCategoria = mysqli_real_escape_string($conexao, trim($_POST["categ"]));
        $exeCategoria = isset($_POST["idcategoria"]) && !empty($_POST["idcategoria"]); 
        
        $sqlCat = $exeCategoria? 
        "UPDATE categoria SET nm_categoria = '".$nomeCategoria."' WHERE cd_categoria = ".$_POST["idcategoria"]:
        "INSERT INTO categoria (cd_restaurante, nm_categoria) VALUES ('".$cdRest."','".$nomeCategoria."')";
        GetBanco()->query($sqlCat);
        ?>
        <script>
            $(document).ready(function() {
                $('.modal-header h4').html('Sucesso').css('color','#28a745');
                $('.modal-body p').html('Seu cadastro foi <strong><?= $exeCategoria?"atualizado":"concluído"?></strong> com sucesso!').css('text-align','center');
                $('.modal-footer button').css('display', 'none');
                $('#modal_validation').modal('toggle');
                setTimeout(function() {
                    self.location = 'cad-categoria'; 
                }, 1500); 
            })
        </script>
                
    <?php 
    }; 
    if(isset($_GET["mensagem"]) && $_GET["mensagem"]=="true") {?>
    <script>
            $(document).ready(function() {
                $('.modal-header h4').html('Sucesso').css('color','#28a745');
                $('.modal-body p').html('Seu cadastro foi <strong>excluido</strong> com sucesso!').css('text-align','center');
                $('.modal-footer button').css('display', 'none');
                $('#modal_validation').modal('toggle');
                setTimeout(function() {
                    self.location = 'cad-categoria'; 
                }, 1500); 
            })
    </script>
    <?php 
    };   
?>
