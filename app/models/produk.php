<?php
// app/models/produk.php
require_once '../config/database.php';

class Produk{
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllProduks() {
        $query = $this->db->query("SELECT * FROM produk");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_produk) {
        $query = $this->db->prepare("SELECT * FROM produk WHERE id_produk = :id_produk");
        $query->bindParam(':id_produk', $id_produk, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($id_kategori, $nama_produk, $deskripsi, $harga, $id_user) {
        $query = $this->db->prepare("INSERT INTO produk (id_kategori, nama_produk, deskripsi, harga, id_user) VALUES (:id_kategori, :nama_produk, :deskripsi, :harga, :id_user)");
        $query->bindParam(':id_kategori', $id_kategori);
        $query->bindParam(':nama_produk', $nama_produk);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':harga', $harga);
        $query->bindParam(':id_user', $id_user);
        return $query->execute();
    }

    // Update produk data by ID
    public function update($id_produk, $data) {
        $query = "UPDATE produk SET id_kategori = :id_kategori, nama_produk = :nama_produk, deskripsi = :deskripsi, harga = :harga, id_user = :id_user WHERE id_produk = :id_produk";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_kategori', $data['id_kategori']);
        $stmt->bindParam(':nama_produk', $data['nama_produk']);
        $stmt->bindParam(':deskripsi', $data['deskripsi']);
        $stmt->bindParam(':harga', $data['harga']);
        $stmt->bindParam(':id_user', $data['id_user']);
        $stmt->bindParam(':id_produk', $id_produk);
        return $stmt->execute();
    }

    // Delete produk by ID
    public function delete($id_produk) {
        $query = "DELETE FROM produk WHERE id_produk = :id_produk";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_produk', $id_produk);
        return $stmt->execute();
    }
}
