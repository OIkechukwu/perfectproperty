<?php
class DBConnection extends PDO {
    // private $host = 'databases.000webhost.com';
    private $host = 'localhost';
    private $dbname = 'perfect_property';
    // private $dbname = 'perfectproperty';
    private $username = 'root';
    // private $username = 'id11179695_perfectproperty';
    private $password = '';
    // private $password = 'databases.000webhost.com';

    public function __construct(){
        try {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;

            parent::__construct($dsn, $this->username, $this->password);
            
        } catch(Exception $e) {
            echo "Oops, an error occured! ".$e->getMessage();
            echo "<br>";
        }
    }
}
?>