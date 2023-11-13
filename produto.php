<?php include('inc/header.php');?>

    <?php
        $produtoIndividual = "SELECT * FROM produto WHERE cd_produto =".$_GET['produto']."";
        $infoProdutoIndividual = $conexao->query($produtoIndividual);
        $rowInfo = $infoProdutoIndividual->fetch_assoc();
    ?>
    <div class="my-5">
        <div class="container">
            <div class="row no-gutters justify-content-center">

                <div class="col-12 col-sm-8 col-md-5">
                    <div class="barra-produto">
                        <div class="my-2 row no-gutters align-items-center">
                            <div class="col-11">
                                <h5 class="bold mb-0"><strong><?php echo$rowInfo['nm_produto']?></strong></h5>
                            </div>
                            <div class="col-1 text-right">
                                <a style="font-size: 1.3rem;" href="./"><i class="las la-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="my-2">
                        <div class="imgProd" data-img="<?php echo$rowInfo['url_imagem'];?>"></div>
                    </div>
      
                    <form id="prod-indv"  method="POST" action="">
                        <input type="hidden" name="idproduto" value="<?php echo$rowInfo["cd_produto"] ?>">
                        <input type="hidden" name="vlproduto" value="<?php echo$rowInfo["vl_produto"] ?>">
                        <div class="my-3">
                            <h5 class="bold"><strong>R$ <?php echo number_format( floatval($rowInfo["vl_produto"]), 2,',','.' )?></strong></h5>
                            <p class="text-secondary"><?php echo $rowInfo["ds_produto"]?></p>
            
                            <div class="my-2">
                                <p class="my-2"><strong>Itens Adicionais</strong></p>
                                <div class="list-group">
                                    <?php
                                    $slectItemAd = "SELECT * FROM complemento_produto WHERE cd_restaurante = 01";
                                    $resultItemAd = $conexao->query($slectItemAd);
                                    $linhasItemAd = $resultItemAd->num_rows; 

                                    while($rowItAd = $resultItemAd->fetch_assoc()) { ?>
                                    <label class="form-check-label" for="">
                                        <div class="form-check list-group-item list-group-item-action">
                                            <div class="d-flex d-flex justify-content-between align-items-center">
                                                <p class="mb-0"><?php echo$rowItAd["nm_itemad"]?> + <strong> R$ <?php echo$rowItAd["vl_itemad"]?></strong></p>
                                                <input type="checkbox" name="itemad" data-id="<?php echo$rowItAd["cd_itemad"]?>" value="<?php echo$rowItAd["vl_itemad"]?>">
                                            </div>
                                        </div>
                                    </label>
                                    <?php
                                    }
                                    ?>
                                </div>              
                            </div>
                        </div>
                  
                        <div class="form-group">
                            <label for="modificacao">Observações:</label>
                            <textarea class="form-control px-2 py-2" rows="2" name="modificacao" placeholder="informe modificações aqui"></textarea>
                        </div>
                  
                        <div class="mt-2 mb-4">
                            <p class="my-2"><strong>Endereço de Entrega: </strong></p> 
                            <input type="text" class="form-control">           
                        </div>
                        
                        <div id="cart" class="d-flex align-items-center justify-content-between">
                            <input type="number" name="qtd" value="0" min="0" max="100" step="1">
                            <button type="submit" class="btn btn-primary">Adicionar&nbsp;&nbsp;<strong id="totalProduto">R$ 00,00</strong></button>
                        </div>
                    </form>
                    <div class="my-2 text-center">
                        <a href="./" class="d-block py-2"><i class="las la-plus-circle mr-2"></i>incluir mais itens</a>
                        <a href="finalizar" class="btn btn-primary w-100">finalizar pedido</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('inc/footer.php')?>