<?php
require 'DBConnection.php';

class GetProperty extends DBConnection {
    public function getAllProperties (){
        $sql = "SELECT * FROM property";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        if ($query->rowCount() == 0){
            return ['status'=>false,'message'=>"No record found", 'property'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Property found!", 'property'=>$response];
        }
    }

    public function getForSale (){
        $sql = "SELECT * FROM property WHERE `purpose`='sale'";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        if ($query->rowCount() == 0){
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

        if ($query->rowCount() == 0){
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

        if ($query->rowCount() == 0){
            return ['status'=>false,'message'=>"No record found", 'property'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Property found!", 'property'=>$response];
        }
    }
}
?>