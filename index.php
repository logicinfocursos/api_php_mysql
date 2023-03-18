<pre>
    <?php
        $a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
        print_r ($a);
    ?>
</pre>

<?php

/* echo "<h1>entrei no php ael</h1>";
print_r ("entrou na api");
echo "entrou na api"; */

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

date_default_timezone_set("America/Sao_Paulo");



if (isset($_GET['path'])) {
    $path = explode("/", $_GET['path']);

} else { 
    echo "*** Caminho não existe *** ael"; exit;
}

if (isset($path[0])) { 
    $api = $path[0]; 

} else { 
    echo "Caminho não existe"; exit; 
}

$id = "";

if (mb_strpos($_SERVER["QUERY_STRING"],"id=")) { 
    $id = $_GET["id"];
}


$method = $_SERVER['REQUEST_METHOD'];

include_once "classes/db.class.php";
include_once "api/clientes/clientes.php";
include_once "api/products/products.php";
include_once "api/users/users.php";
include_once "api/posts/posts.php";