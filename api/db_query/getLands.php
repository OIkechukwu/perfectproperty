<?php
require 'DBSearch.php';

class GetUsers extends DBConnection {
    public function getForSale (){
        $sql = "SELECT * FROM land WHERE `purpose`='sale'";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        print_r($response);
        if (count($response) == 0){
            return ['status'=>false,'message'=>"No record found", 'land'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Land found!", 'land'=>$response];
        }
    }

    public function getForRent (){
        $sql = "SELECT * FROM land WHERE `purpose`='rent'";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        print_r($response);
        if (count($response) == 0){
            return ['status'=>false,'message'=>"No record found", 'land'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Land found!", 'land'=>$response];
        }
    }

    public function getForShortLet (){
        $sql = "SELECT * FROM land WHERE `purpose`='short let'";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        print_r($response);
        if (count($response) == 0){
            return ['status'=>false,'message'=>"No record found", 'land'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Land found!", 'land'=>$response];
        }
    }
}
?>