    <?php
require 'DBConnection.php';

class SearchDB extends DBConnection {
    public function searchBudget ($budget){
        $sql = "SELECT * FROM property WHERE budget=:budget";
        $query = PDO::prepare($sql);
        $query->execute(['budget'=>$budget]);
        $response = $query->fetchAll(PDO::FETCH_ASSOC);

        // print_r($response);
        if (count($response) == 0){
            return ['status'=>true,'message'=>"No record found", 'property'=>"none"];
        } else {
            return ['status'=>false, 'message'=>"Budget found!", 'property'=>$response];
        }
    }
}
?>