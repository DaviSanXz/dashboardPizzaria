<?php
    $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);

    // if ($acao == 'sobreNos') {
    //     include_once './empresa/sobreNos.php';
    // }else if ($acao == 'cardapio') {
    //     include_once './empresa/cardapio.php';
    // }else if ($acao == 'evento') {
    //     include_once './empresa/eventos.php';
    // }else{
    //     echo 'erro';
    // }

    switch ($acao){
        case 'sobreNos':
            include_once './empresa/sobreNos.php';
            break;
        case 'cardapio':
            include_once './empresa/cardapio.php';    
            break;
        case 'evento':  
            include_once './empresa/eventos.php';
            break;
        case 'equipe':
            include_once './empresa/equipe.php';
            break;     
    }
?>