<?php
class DBConnection extends PDO {
<<<<<<< HEAD
    // private $host = 'databases.000webhost.com';
    private $host = 'localhost';
    private $dbname = 'perfect_property';
    // private $dbname = 'perfectproperty';
    private $username = 'root';
    // private $username = 'id11179695_perfectproperty';
    private $password = '';
    // private $password = 'databases.000webhost.com';
=======
    private $host = 'databases.000webhost.com';
    // private $host = 'localhost';
    // private $dbname = 'databases.000webhost.com';
    private $dbname = 'perfectproperty';
    // private $username = 'root';
    private $username = 'id11179695_perfectproperty';
//     private $password = '';
    private $password = 'databases.000webhost.com';
>>>>>>> 1688cf7f0250bb453f0aacdefd6ff5a0dfa360f9

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
