<?php
require 'DBSearch.php';

class GetUsers extends DBQuery {
    public function getForSale (){
        $sql = "SELECT * FROM property WHERE `purpose`='sale'";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        print_r($response);
        if (count($response) == 0){
            return ['status'=>false,'message'=>"No record found", 'property'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Property found!", 'property'=>$response];
        }
    }

    public function getForRent (){
        $sql = "SELECT * FROM property WHERE `purpose`='rent'";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        print_r($response);
        if (count($response) == 0){
            return ['status'=>false,'message'=>"No record found", 'property'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Property found!", 'property'=>$response];
        }
    }

    public function getForShortLet (){
        $sql = "SELECT * FROM property WHERE `purpose`='short let'";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        print_r($response);
        if (count($response) == 0){
            return ['status'=>false,'message'=>"No record found", 'property'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Property found!", 'property'=>$response];
        }
    }
}
?>