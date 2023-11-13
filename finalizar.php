<?php include('inc/header.php')?>

<div class="mt-5">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-12 col-sm-8 col-md-5">
                <div class="cartWrapper">  
                    <div class="barra-produto-final">
                        <div class="my-2 row no-gutters align-items-center">
                            <div class="col-11">
                                <h5 class="bold mb-0"><strong>Finalizar Pedido</strong></h5>
                            </div>
                            <div class="col-1 text-right">
                                <a style="font-size: 1.3rem;" href="./"><i class="las la-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
      

                    <div class="mt-2 mb-4">
                        <p class="my-2"><strong>Forma de Pagamento:</strong></p>
                        <div class="list-group">
                            <label class="form-check-label" for="">
                                <div class="form-check list-group-item list-group-item-action py-1 px-4">
                                    <div class="d-flex d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Dinheiro</p>
                                        <input type="radio" name="complementos" id="" value="">
                                    </div>
                                </div>
                            </label>
                            <label class="form-check-label" for="">
                                <div class="form-check list-group-item list-group-item-action py-1 px-4">
                                    <div class="d-flex d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Cartão - Débito</p>
                                        <input type="radio" name="complementos" id="" value="">
                                    </div>
                                </div>
                            </label>
                            <label class="form-check-label" for="">
                                <div class="form-check list-group-item list-group-item-action py-1 px-4">
                                    <div class="d-flex d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Cartão - Crédito</p>
                                        <input type="radio" name="complementos" id="" value="">
                                    </div>
                                </div>
                            </label>
                            <label class="form-check-label" for="">
                                <div class="form-check list-group-item list-group-item-action py-1 px-4">
                                    <div class="d-flex d-flex justify-content-between align-items-center">
                                        <p class="mb-0">Vale Refeição - VR</p>
                                        <input type="radio" name="complementos" id="" value="">
                                    </div>
                                </div>
                            </label>
                        </div>              
                    </div>  
                    <div class="mt-2 mb-4">
                        <h6><strong>TOTAL DO PEDIDO: R$ 00.00</strong></h6>
                        <div class="infoFinal">
                            <p>Pagamento: Cartão - Débito</p>
                            <p>Observações: Retirar cebolas e alface do Lanche.</p>
                            <p>Endereço: Rua Paraná, 223 - Vila Mathias</p>
                        </div>
                    </div>

                    <div class="finalarea">
                        <a href="finalizar" class="btn btn-primary w-100">finalizar pedido</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php')?>