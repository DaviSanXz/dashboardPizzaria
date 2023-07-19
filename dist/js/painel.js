// $('.menuLink').on('click', function () {
    
// })

$('.menuLateralClick').on('click', function () {
    var dataMenu = $(this).attr('data-menu');


    var dados  = {
        acao: dataMenu
    }

    
    $.ajax( {
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function () {
            
        }, success: function (retorno) {
            console.log(retorno);
            $('.conteudo').html(retorno);
        }
    })

});


function cardNos() {
    $('.frnCardNos').on('submit', function (retorno){
        retorno.preventDefault();
        
        
        var formdata = $(this).serializeArray();
        dados.push(
            {name: "acao", value: 'sobreNosAdd'}
        );

        $.ajax( {
            type: "POST",
            dataType: 'html',
            url: 'controle.php',
            data: dados,
            beforeSend: function () {

            }, success: function (retorno) {
                $('.conteudo').html(retorno);
            }
        });
    })
}


