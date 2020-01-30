<?php
require 'DBSearch.php';

class GetAgent extends DBConnection {
    public function getAllAgents (){
        $sql = "SELECT * FROM agent";
        $query = PDO::prepare($sql);
        $query->execute();
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        if (count($response) == 0){
            return ['status'=>false,'message'=>"No record found", 'agent'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Agent found!", 'agent'=>$response];
        }
    }

    public function checkAgent ($email){
        $sql = "SELECT * FROM agent WHERE email = :email";
        $query = PDO::prepare($sql);
        $query->execute([
            'email' => $email
        ]);
        $response = $query->fetch(PDO::FETCH_ASSOC);

        if ($query->rowCount() == 0){
            // header('location:../login.html');
            return ['status'=>false,'message'=>"No record found", 'agent'=>"none"];
        } else {
            return ['status'=>true, 'message'=>"Agent found!", 'agent'=>$response];
        }
    }
}
?>