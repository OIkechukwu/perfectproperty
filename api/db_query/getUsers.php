<?php
require 'DBSearch.php';

class GetUsers extends DBQuery {
    public function getData (){
        $sql = "SELECT * FROM odp_3 WHERE `role`='user'";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        // print_r($response);
        if (count($response) == 0){
            return ['status'=>false,'message'=>"No record found", 'user'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Email address already exists!", 'user'=>$response];
        }
    }
}
?>