$(document).ready(function() {

    $('input[name="itemad"]').on('click',calcularValorProduto);
    $('input[name="qtd"]').on('change',calcularValorProduto);
});


function calcularValorProduto() {

    var form = $('#prod-indv');
    var valorProduto = parseFloat(form.find('input[name="vlproduto"]').val());
    var ttItemAd = 0;

    console.log(valorProduto);

    form.find('input[name="itemad"]:checked').each((index, element) => {
        ttItemAd += parseFloat($(element).val());
    });
    console.log(ttItemAd);

    var qtd = form.find('input[name="qtd"]').val();

    console.log( qtd );

    var displayVal = (valorProduto+ttItemAd)*qtd;

    
    console.log( displayVal );
    $('#totalProduto').html('R$ '+ displayVal+',00');

    return displayVal;
}
