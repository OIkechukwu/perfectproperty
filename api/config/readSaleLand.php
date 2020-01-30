<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: appication/json; charset = UFT-8");

require '../db_query/getLands.php';

$getLand = new GetLand;

$json = json_encode($getLand->getForSale());

// if ($json['status']) {
//     http_response_code(200);
    echo $json;
// } else {
//     http_response_code(404);
//     echo $json;
// }

?>