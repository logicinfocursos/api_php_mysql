<?php

if ($id == '') {
    $db = DB::connect();
    $rs = $db->prepare("SELECT * FROM posts");
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
    $rs = $db->prepare('SELECT * FROM posts WHERE id="'. $id . '"');
    $rs->execute();s
    $obj = $rs->fetchObject();

    if ($obj) {
        echo json_encode(["dados" => $obj]);
    } else {
        echo json_encode(["dados" => '**** Não existem dados para retornar']);
    }
}