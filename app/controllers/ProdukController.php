<?php
// app/controllers/ProdukController.php
require_once '../app/models/Produk.php';
require_once '../app/models/Kategori.php';

class ProdukController {
    private $produkModel;
    private $kategoriModel;

    public function __construct() {
        $this->produkModel = new Produk();
         $this->kategoriModel = new Produk();
    }

    public function index() {
        $produks = $this->produkModel->getAllProduks();
        require_once '../app/views/produk/index.php';

    }

    public function create() {
        require_once '../app/views/produk/create.php';
    }

    public function store() {
          $id_kategori = $_POST['id_kategori']; 
          $nama_produk = $_POST['nama_produk'];
          $deskripsi = $_POST['deskripsi'];
          $harga = $_POST['harga'];
          $id_user = $_POST['id_user'];
        $this->produkModel->add($id_kategori, $nama_produk, $deskripsi, $harga, $id_user);
        header('Location: /produk/index');
    }
    // Show the edit form with the produk data
    public function edit($id_produk) {
        $produk = $this->produkModel->find($id_produk); // Assume find() gets produk by ID
        require_once __DIR__ . '/../views/produk/edit.php';
    }

    // Process the update request
    public function update($id_produk, $data) {
        $updated = $this->produkModel->update($id_produk, $data);
        if ($updated) {
            header("Location: /produk/index"); // Redirect to produk list
        } else {
            echo "Failed to update produk.";
        }
    }

    // Process delete request
    public function delete($id_produk) {
        $deleted = $this->produkModel->delete($id_produk);
        if ($deleted) {
            header("Location: /produk/index"); // Redirect to produk list
        } else {
            echo "Failed to delete produk.";
        }
    }
}
