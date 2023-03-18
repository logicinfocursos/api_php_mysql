<?php


if ($id == '') { echo json_encode(['ERRO' => "É necessário informar um produto."]); exit; }

if ($id != '') {

    $sqlString = "DELETE FROM products WHERE id=" . $id;

    $db = DB::connect();
    $rs = $db->prepare($sqlString);
    $exec = $rs->execute();

    if ($exec) {
        echo json_encode(["data" => 'Dados foram excluidos com sucesso.']);
    } else {
        echo json_encode(["data" => 'Houve algum erro ao excluir os dados.']);
    }
}