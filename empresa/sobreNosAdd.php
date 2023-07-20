<?php
include_once './config/conexao.php';
include_once './config/constantes.php';
include_once './func/funcdashboard.php';


 $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
 $img = $dados['img'];
 $subtitulo = $dados['subtitulo'];
 $contato = $dados['contato'];
 $text = $dados['text'];
 $video = $dados['video'];
 $alteracao = $dados['alteracao'];
 $cadastro = $dados['cadastro'];
 $ativo = $dados['ativo'];
 $subtituloP = $dados['subtituloP'];
 $text2 = $dados['text2'];
 $text3 = $dados['text3'];
 $text4 = $dados['text4'];

 $dataAtual = date('Y-m-d N:i:a');

 $retorno = insertDashboardYummy('sobrenois', 'img, subtitulo, contato, text, video, alteracao, cadastro, ativo, subtituloP, text2, text3, text4', "$img", "$subtitulo", "$contato", "$text", "$video", "$alteracao", "$cadastro", "$ativo", "$subtituloP", "$text2", "$text3", "$text4");
 if ($retorno > 0) {
    echo true;
 } else {
    echo false;
 }
?>