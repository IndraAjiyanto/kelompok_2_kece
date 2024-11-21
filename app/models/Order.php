<?php
// app/models/Order.php
require_once '../config/database.php';

class Order {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllOrders() {
        $query = $this->db->query("SELECT * FROM `order`");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM `order` WHERE id_order = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($id_produk, $id_user, $status) {
        $query = $this->db->prepare("INSERT INTO `order` (id_produk, id_user, status) VALUES (:id_produk, :id_user, :status)");
        $query->bindParam(':id_produk', $id_produk);
        $query->bindParam(':id_user', $id_user);
        $query->bindParam(':status', $status);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE `order` SET id_produk = :id_produk, id_user = :id_user, status = :status WHERE id_order = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_produk', $data['id_produk']);
        $stmt->bindParam(':id_user', $data['id_user']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM `order` WHERE id_order = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
