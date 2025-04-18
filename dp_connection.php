<?php 
 
  class Database {

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "homestays and cultural exchange";
    public $conn;

    public function __construct() {
        $this->connect();
    }

    public function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        
    }
}

?>
