<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: appication/json; charset = UFT-8");

require '../../db_query/getAgents.php';

$checkAgent = new GetAgent;

$json = json_encode($checkAgent->checkAgent());

// if ($json['status']) {
//     http_response_code(200);
    echo $json;
// } else {
//     http_response_code(404);
//     echo $json;
// }

?>