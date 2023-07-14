<?php
 $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
 $email = $dados['email'];
 $senha = $dados['senha'];

 echo "cadastrado com sucesso $email e $senha";
?>