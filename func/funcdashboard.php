<?php
function listarDashboard($campo, $tabela)
{
    $conn = conectar();
    $queryListar = $conn->prepare("SELECT $campo FROM $tabela");
    $queryListar->execute();
    if ($queryListar->rowCount() > 0) {
        return $queryListar->fetchAll(PDO::FETCH_OBJ);
    } else {
        return 'Vazio';
    }
}


function excluirDashboardYummy($tabela, $campoid, $id)
{
    $conn = conectar();
    $queryListar = $conn->prepare("DELETE FROM $tabela WHERE $campoid = $id");
    $queryListar->execute();
    if ($queryListar->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}


function insertDashboardYummy($tabela, $campos, $valor)
{
    $conn = conectar();
    $queryListar = $conn->prepare("INSERT INTO $tabela($campos) VALUES $valor");
    $queryListar->execute();
    if ($queryListar->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}
