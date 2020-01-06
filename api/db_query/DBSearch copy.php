<?php
require 'DBQuery.php';

class SearchDB extends DBQuery {
    public function searchData ($email){
        $sql = "SELECT * FROM odp_3 WHERE email=:email";
        $query = PDO::prepare($sql);
        $query->execute(['email'=>$email]);
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        // print_r($response);
        if (count($response) == 0){
            return ['status'=>true,'message'=>"No record found", 'user'=>"none"];
        } else {
            return ['status'=>false, 'message'=>"Email address already exists!", 'user'=>$response];
        }
    }
}
?>