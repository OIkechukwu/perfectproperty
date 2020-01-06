<?php
require 'DBConnection.php';

class DBQuery extends DBConnection {
    public function insertODPParticipant ($fullname, $email, $password, $gender, $dob, $address, $stateOfOrigin, $lgaOfOrigin, $stateOfResidence, $lgaOfResidence, $profile_img) {
        $sql = "INSERT INTO odp_3(fullname, email, password, gender, dob, address, state, lga, state_of_residence, lga_of_residence, profile_img) VALUES(:fullname, :email, :password, :gender, :dob, :address, :state, :lga, :state_of_residence, :lga_of_residence, :profile_img)";

        $query = PDO::prepare($sql);
        $query->execute(['fullname'=>$fullname, 'email'=>$email, 'password'=>$password, 'gender'=>$gender, 'dob'=>$dob, 'address'=>$address, 'state'=>$stateOfOrigin, 'lga'=>$lgaOfOrigin, 'state_of_residence'=>$stateOfResidence, 'lga_of_residence'=>$lgaOfResidence, 'profile_img'=>$profile_img]);

        if ($query->errorCode() == 0){
            return ['status'=>true,'message'=>"Data inserted successfully"];
        } else {
            $message = $query->errorInfo();
            return ['status'=>false, 'message'=>"There was an error - ".$message[2]];
        }
    }

    public function editODPParticipant ($fullname, $gender, $dob, $address, $stateOfOrigin, $lgaOfOrigin, $stateOfResidence, $lgaOfResidence, $profile_img, $email) {
        $sql = "UPDATE odp_3 SET fullname = :fullname, email = :email, gender = :gender, dob = :dob, address = :address, state = :state, lga = :lga, state_of_residence = :state_of_residence, lga_of_residence = :lga_of_residence, profile_img = :profile_img WHERE email = :email";
        $query = PDO::prepare($sql);
        $response = $query->execute(['fullname'=>$fullname, 'email'=>$email, 'gender'=>$gender, 'dob'=>$dob, 'address'=>$address, 'state'=>$stateOfOrigin, 'lga'=>$lgaOfOrigin, 'state_of_residence'=>$stateOfResidence, 'lga_of_residence'=>$lgaOfResidence, 'profile_img'=>$profile_img]);
        
        if ($query->errorCode() == 0){
            return ['status'=>true,'message'=>"Data edited successfully"];
        } else {
            $message = $query->errorInfo();
            return ['status'=>false, 'message'=>"There was an error - ".$message[2]];
        }
    }

    public function deleteODPParticipant ($email) {
        $sql = "DELETE FROM odp_3 WHERE email=:email";
        $query = PDO::prepare($sql);
        $query->execute(['email'=>$email]);  

        if ($query->errorCode() == 0){
            return ['status'=>true,'message'=>"Data deleted successfully"];
        } else {
            $message = $query->errorInfo();
            return ['status'=>false, 'message'=>"There was an error - ".$message[2]];
        }
    }
}

?>