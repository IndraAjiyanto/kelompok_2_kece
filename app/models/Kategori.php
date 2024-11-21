<?php
// app/models/kategori.php
require_once '../config/database.php';

class Kategori {
    private $db;
    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllKategori() {
        $query = $this->db->query("SELECT * FROM kategori");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM kategori WHERE id_kategori = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($namakategori, $deskripsi) {
        $query = $this->db->prepare("INSERT INTO kategori (nama_kategori, deskripsi) VALUES (:nama_kategori, :deskripsi)");
        $query->bindParam(':nama_kategori', $namakategori);
        $query->bindParam(':deskripsi', $deskripsi);
        return $query->execute();
    }

    // Update kategori data by ID
    public function update($id, $data) {
        $query = "UPDATE kategori SET nama_kategori = :nama_kategori, deskripsi = :deskripsi WHERE id_kategori = :id_kategori";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_kategori', $data['nama_kategori']);
        $stmt->bindParam(':deskripsi', $data['deskripsi']);
        $stmt->bindParam(':id_kategori', $id);
        return $stmt->execute();
    }

    // Delete kategori by ID
    public function delete($id) {
        $query = "DELETE FROM kategori WHERE id_kategori = :id_kategori";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_kategori', $id);
        return $stmt->execute();
    }
    public function findKategori($id){
        $query = $this->db->prepare("SELECT nama_kategori FROM kategori WHERE id_kategori = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchColumn();
    }
}