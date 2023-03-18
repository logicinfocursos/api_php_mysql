<?php

if ($id == '') {
    $db = DB::connect();
    $rs = $db->prepare("SELECT * FROM clients ORDER BY FirstName");
    $rs->execute();

   $obj = $rs->fetchAll(PDO::FETCH_ASSOC);

    if ($obj) {
        echo json_encode(["dados" => $obj]);
    } else {
        echo json_encode(["dados" => '>>> Não existem dados para retornar']);
    }
}

if ($id != '') {
    $db = DB::connect();
    $rs = $db->prepare('SELECT * FROM clients WHERE id="'. $id . '"');
    $rs->execute();
    $obj = $rs->fetchObject();

    if ($obj) {
        echo json_encode(["dados" => $obj]);
    } else {
        echo json_encode(["dados" => '**** Não existem dados para retornar']);
    }
}