<?php
// app/models/User.php
require_once '../config/database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM user");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $query = $this->db->prepare("SELECT * FROM user WHERE id_user = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama, $email, $password, $alamat) {
        $query = $this->db->prepare("INSERT INTO user (nama, email, password, alamat) VALUES (:nama, :email, :password, :alamat)");
        $query->bindParam(':nama', $nama);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->bindParam(':alamat', $alamat);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id, $data) {
        $query = "UPDATE user SET nama = :nama, email = :email, password = :password, alamat = :alamat WHERE id_user = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':alamat', $data['alamat']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id) {
        $query = "DELETE FROM user WHERE id_user = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

     public function checkIfUserInOrder($id){
        $query = "SELECT COUNT(*) FROM `order` WHERE id_user = :id";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        //ambil hasilnya
        $count = $stmt->fetchColumn();

        if($count > 0){
            return 1;
        }else{
            return 0;
        }
     }
     public function checkIfUserInProduk($id){
        $query = "SELECT COUNT(*) FROM `produk` WHERE id_user = :id";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        //ambil hasilnya
        $count = $stmt->fetchColumn();

        if($count > 0){
            return 1;
        }else{
            return 0;
        }
     }


    public function findNama($id){
        $query = $this->db->prepare("SELECT nama FROM `user` WHERE id_user = :id");
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchColumn();
    }

}

