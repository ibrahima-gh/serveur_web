<?php
require_once __DIR__ . '/../../public/db.php';

class ProductModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllProducts() {
        $sql = "SELECT * FROM produit";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}