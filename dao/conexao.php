<?php

class conexao {
    
    private $conn;
    
    public function __construct() {
        
    }

    public function getConn() {
        return $this->conn;
    }
    
    public function setConn($conn): void {
        $this->conn = $conn;
    }
    
    public static function conexao() {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=farmacia', "root", "");
            $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        return $conn;
    }
}

?>