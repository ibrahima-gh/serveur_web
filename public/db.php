<?php
class Database {
    private $host = 'localhost';
    private $db = 'crepe';
    private $user = 'postgres';
    private $password = 'postgres'; 
    private $conn;

    public function connect() {
        if ($this->conn === null) {
            try {
                $this->conn = new PDO("pgsql:host=$this->host;dbname=$this->db", $this->user, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
        }
        return $this->conn;
    }
}