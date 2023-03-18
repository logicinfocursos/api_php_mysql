<?php


//if ($acao == '' && $id == '') { echo json_encode(['ERRO' => 'Caminho não encontrado!']); exit; }

if ($id == '') { echo json_encode(['ERRO' => "É necessário informar um cliente."]); exit; }

if ($id != '') {

    $sqlString = "DELETE FROM clients WHERE id=" . $id;
  
    $db = DB::connect();
    $rs = $db->prepare($sqlString);
    $exec = $rs->execute();

    if ($exec) {
        echo json_encode(["dados" => 'Dados foram excluidos com sucesso.']);
    } else {
        echo json_encode(["dados" => 'Houve algum erro ao excluir os dados.']);
    }
}