<?php
include_once './config/conexao.php';
include_once './config/constantes.php';
include_once './func/funcdashboard.php';

$editarId = filter_input(INPUT_POST, 'editarId', FILTER_SANITIZE_STRING);