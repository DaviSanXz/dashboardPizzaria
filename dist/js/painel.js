// $('.menuLink').on('click', function () {
    
// })

$('.menuLateralClick').on('click', function () {
    var dataMenu = $(this).attr('data-menu');
    $('.conteudo').html(dataMenu);


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


function cardNos(idform, idmodal, pageaction, page) {
    $('.' +idform).submit(function (retorno){
        retorno.preventDefault();
        
        
        var formdata = $(this).serializeArray();
        dados.push(
            {name: "acao", value: pageaction}
        );

        $.ajax( {
            type: "POST",
            dataType: 'html',
            url: 'controle.php',
            data: dados,
            beforeSend: function () {

            }, success: function () {
                $('.' +idmodal).modal('hide');
                setTimeout(function () {
                    atualizarPagina(page);
                }, 1000);
            }
        });
    })
}



function excGeral(id, page, pageretorno) {
    var dados = {
        acao: page,
        id: id
    }
    $.ajax( {
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function () {

        }, success: function (retorno) {
            setTimeout(function () {
                atualizarPagina(pageretorno);

            }, 1000);
            
        }
    })
}



function atualizarPagina(page) {
    var dados = {
        acao: page
    }

    $.ajax( {
        type: "POST",
        dataType: 'html',
        url: 'controle.php',
        data: dados,
        beforeSend: function() {

        }, success: function (retorno) {
            $('.conteudo').html('retorno');
        }
    });
}