<?php

if ($id != '') {

    array_shift($_PUT);

    $sql = "UPDATE clientes SET ";

    $this->name=htmlspecialchars(strip_tags($this->FirstName));

    $contador = 1;
    foreach (array_keys($_PUT) as $indice) {
        if (count($_PUT) > $contador) {
            $sql .= "{$indice} = '{$_PUT[$indice]}', ";
        } else {
            $sql .= "{$indice} = '{$_PUT[$indice]}' ";
        }
        $contador++;
    }

    $sql .= "WHERE id={$id}";

    $db = DB::connect();
    $rs = $db->prepare($sql);
    $exec = $rs->execute();

    if ($exec) {
        echo json_encode(["dados" => 'Dados atualizados com sucesso.']);
    } else {
        echo json_encode(["dados" => 'Houve erro ao atualizar dados.']);
    }

}