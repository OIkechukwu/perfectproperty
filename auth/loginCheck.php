<?php
require '../api/db_query/getAgents.php';

print_r($_POST);
$email = $_POST['email'];
$password = $_POST['password'];

$checkAgent = new GetAgent;

$agent = $checkAgent->checkAgent($email);

print_r($agent);


?>