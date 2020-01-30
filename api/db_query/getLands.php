<?php
require 'DBSearch.php';

class GetLand extends DBConnection {
    public function getAllLands (){
        $sql = "SELECT * FROM land";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        if ($query->rowCount() == 0){
            return ['status'=>false,'message'=>"No record found", 'land'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Land found!", 'land'=>$response];
        }
    }

    public function getForSale (){
        $sql = "SELECT * FROM land WHERE `purpose`='sale'";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        if ($query->rowCount() == 0){
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

        if ($query->rowCount() == 0){
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

        if ($query->rowCount() == 0){
            return ['status'=>false,'message'=>"No record found", 'land'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Land found!", 'land'=>$response];
        }
    }
}
?>