<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: appication/json; charset = UFT-8");

require '../db_query/getProperties';

$getProperty = new GetProperty;

print_r($getProperty);

?>