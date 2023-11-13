    //INCLUIR CAMPOS DINAMICAMENTE NO FORMULÁRIO
    let count = 1;
    var HTMLitem = '<div id="linha{count}" class="col-6">'+
    '<div class="m-1">'+
        '<label>Item Adicional nº{count}</label>'+
        '<div class="form-group mb-0 d-flex">'+
            '<select class="form-control" id="itemadicional{count}" name="itemadicional[]">';
                    $.each(item_adicional,(i)=> {
                        var opcao = item_adicional[i];
                        console.log(opcao);
                        HTMLitem+='<option value="'+opcao.cd_itemad+'">'+opcao.nm_itemad+'</option>';
                    });
                HTMLitem +='</select>{btn}'+
            '</div>'+
        '</div>'+
    '</div>';

    window.inserItensAdicionados = function(itensSelecionados){
       
        itensSelecionados = itensSelecionados.flat();
        console.log(itensSelecionados);

        itensSelecionados.forEach(item => {
            htmlItem(item);
        });
    }
    function htmlItem(item = null) {
      
        $('.itensAdicionais').append(HTMLitem.replaceAll("{count}", count).replaceAll("{btn}", ''));
        $('#itemadicional'+count).val(item).change();
        count++;
    };


$(document).ready(function() {

    // htmlItem();

    $(".adicionar").on("click", function(e) {
        $(this).blur();
        e.preventDefault();
        count++;
        $('.itensAdicionais').append(HTMLitem.replaceAll("{count}", count).replaceAll("{btn}", '<a href="#" id="'+count+'" class="btn btn-danger deletar"><i class="fa-solid fa-trash"></i></a>')); 
    });
 

    //REMOVER CAMPOS DINAMICAMENTE NO FORMULÁRIO
    $("form").on("click", ".deletar", function(e) {
        e.preventDefault();
        let btn = $(this).attr('id');
        if(btn != count) {
            $('.modal-header h4').html('ATENÇÃO').css('color','#c82333');
            $('.modal-body p').html('Não possível deletar o item <strong>nº'+btn+'</strong> antes do item <strong>nº'+count+'</strong>.');
            $('#modal_validation').modal('toggle');
            $(e.target(btn)).click(false);
        }
        $('#linha'+btn+'').remove();
        count--;
    });
    
});