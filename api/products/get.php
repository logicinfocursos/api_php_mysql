<?php

if ($id == '') {
    $db = DB::connect();
    $rs = $db->prepare("SELECT * FROM products");
    $rs->execute();

   $obj = $rs->fetchAll(PDO::FETCH_ASSOC);

    if ($obj) {
        echo json_encode($obj);
    } else {
        echo json_encode(["data" => '>>> Não existem dados para retornar']);
    }
}

if ($id != '') {
    $db = DB::connect();
    $rs = $db->prepare('SELECT * FROM products WHERE id="'. $id . '"');
    $rs->execute();
    $obj = $rs->fetchObject();

    if ($obj) {
        echo json_encode($obj);
    } else {
        echo json_encode(["data" => '**** Não existem dados para retornar']);
    }
}