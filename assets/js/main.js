function toggleInputImagemProduto() {
    $('#thumb-imagem-produto').toggleClass('d-none');
    $('#input-imagem-produto').toggleClass('d-none');
    $('#input-imagem-produto').toggleClass('d-flex');
}

$(document).ready(function () {
    
    
//SETA IMAGEM DE INTRODUÇÃO (BANNER RESTAURANTE)
    $('.bannerIntro').each(function () {
        var bg = $(this).data('banner');
        $(this).css('background-image', 'url(' + bg + ')');
    });

//SETA COR DO STATUS (VERDER = ABERTO / VERLHOS = FECHADO)
    var color = $('.restauranteStatus').data('clstatus');
    $('.restauranteStatus').css('background-color', color);

//CRIA O SPINNER
    $("input[type='number']").inputSpinner();

//SETA IMAGEM DO PRODUTO
    $('.imgProd, .imgIntro').each(function () {
        var img = $(this).data('img');
        $(this).css('background-image', 'url(' + img + ')');
    });

//CRIA CATEGORIAS
    $('.categorias').owlCarousel({
        margin: 3,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 4,
                loop: true
            },
            424.98 : {
                items: 4,
                loop: true
            },
            767.98: {
                items: 4,
                loop: true
            }
        }
    });

//VALIDAÇAÕ DE FORMULÁRIO
    $('form').on('submit', function(e) { 
        //recebe id do formulário
            var idForm = this.id;
            //atribui dinamicamente o id ao input/textarea
            var parametro = '#' + idForm + ' input, #' + idForm + ' textarea';
            // utiliza essa variável como parâmetro para o each
            $(parametro).each(function() {
            // recebe o valor do input
            var campo = $(this).val();
            // verifica se está vazio
            if(campo == "") {
                // recebe o valor do nome do inpute (data-name)
                var nomeCampo = $(this).data('name');

                if(nomeCampo == undefined) {
                    return true;
                }
                
                $('.modal-header h4').html('Campo Obrigatório');
                $('.modal-body p').html('O campo "'+nomeCampo+'" está vazio.').css('text-transform', 'capitalize');
                $('#modal_validation').modal('toggle');
                e.preventDefault();
                return false;
            }
        })
    });

// MÁSCARAS DE INPUT
    $('.cep').mask('00000-000');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});

    var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };
      
    $('.telefone').mask(SPMaskBehavior, spOptions);
   
});

