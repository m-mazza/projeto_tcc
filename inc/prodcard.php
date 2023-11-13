<?php 
$sqlProduto = "SELECT * FROM produto  WHERE cd_restaurante = 01";
$dadosProduto = $conexao->query($sqlProduto);
$lista = $dadosProduto->fetch_all(MYSQLI_ASSOC);
$listaAgrupada = [];

foreach($lista as $itemLista ){
    if(array_key_exists($itemLista['cd_categoria'], $listaAgrupada) ){
        $listaAgrupada[$itemLista['cd_categoria']][]=$itemLista;
    } else {
        $listaAgrupada[$itemLista['cd_categoria']]=[$itemLista];
    }
}

foreach($listaAgrupada as $cod => $itemAgrupado){
    
    echo "<section id='cat-$cod'>";
    foreach($itemAgrupado as $rowProduto){ ?>

<div class="row no-gutters justify-content-center">
    <div class="col-12">
        <div class="my-1">
            <a href="produto?produto=<?php echo$rowProduto["cd_produto"];?>">
                <div class="shadow">
                    <div class="row no-gutters">                                       
                        <div class="col-12">
                            <div class="card-image">
                                <img onerror="this.src='assets/img/produtos/no_image.png'" src="<?php echo$rowProduto["url_imagem"];?>">
                            </div>
                            <div class="card-body d-flex align-items-center">
                                <div class="w-100"> 
                                    <h6 class="mb-0"><?php echo$rowProduto["nm_produto"];?></h6>
                                    <p class="text-secondary"><?php echo$rowProduto["ds_produto"];?></p>
                                    <p class="bold mb-0"><strong>R$ <?php echo number_format( floatval($rowProduto["vl_produto"]), 2,',','.' )?></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
    
<?php
    }
    echo '</section>';
}
?>