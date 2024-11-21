<?php
// app/controllers/ProdukController.php
require_once '../app/models/Produk.php';
require_once '../app/models/Kategori.php';
require_once '../app/models/User.php';

class ProdukController {
    private $produkModel;
    private $kategoriModel;
    private $userModel;

    public function __construct() {
        $this->produkModel = new Produk();
         $this->kategoriModel = new Kategori();
         $this->userModel = new User();
    }

    public function index() {
        $produks = $this->produkModel->getAllProduks();
        $kategori = $this->kategoriModel;
        $user = $this->userModel;
        require_once '../app/views/produk/index.php';

    }

    public function create() {
        $kategori = $this->kategoriModel->getAllKategori();
        $user = $this->userModel->getAllUsers();
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
        $produk = $this->produkModel->find($id_produk);
        $kategori = $this->kategoriModel->getAllKategori(); // Assume find() gets produk by ID
        $user = $this->userModel->getAllUsers(); // Assume find() gets produk by ID
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
    public function delete($id_produk) {
        // Cek apakah produk masih digunakan di tabel 'order'
        $isUsedInOrder = $this->produkModel->checkIfProductInOrder($id_produk);
        
        if ($isUsedInOrder > 0) {
            // Jika produk masih digunakan di tabel order, tampilkan pesan error
            header("Location: /produk/index"); 
        } else {
            // Jika produk tidak digunakan, lanjutkan dengan penghapusan
            $deleted = $this->produkModel->delete($id_produk);
            if ($deleted) {
                header("Location: /produk/index"); // Redirect ke halaman produk setelah penghapusan
                exit;
            } else {
                echo "Gagal menghapus produk.";
            }
        }
    }
}