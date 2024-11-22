<?php
// app/controllers/KategoriController.php
require_once '../app/models/Kategori.php';
class KategoriController {
    private $KategoriModel;
    public function __construct() {
        $this->KategoriModel = new Kategori();
    }

    public function index() {
        $kategori = $this->KategoriModel->getAllKategori();
        $judul = "kategori";

        require_once '../app/views/template/navbar.php';
        require_once '../app/views/template/table.php';
        require_once '../app/views/kategori/index.php';
        require_once '../app/views/template/tutup_table.php';
        require_once '../app/views/template/footer.php';
    }


    public function create() {
        $judul = "kategori";
        $metode = "Tambah";
        require_once '../app/views/template/navbar.php';
        require_once '../app/views/template/form.php';
        require_once '../app/views/kategori/create.php';
        require_once '../app/views/template/tutup_form.php';
        require_once '../app/views/template/footer.php';
    }

    public function store() {
        $namakategori = $_POST['nama_kategori'];
        $deskripsi = $_POST['deskripsi'];
        $this->KategoriModel->add($namakategori, $deskripsi);
        header('Location: /kategori/index');
    }

    // Show the edit form with the kategori data
    public function edit($id) {
        $kategori = $this->KategoriModel->find($id); // Assume find() gets kategori by ID
        $judul = "Kategori";
        $metode = "Edit";
        require_once '../app/views/template/navbar.php';
        require_once '../app/views/template/form.php';
        require_once __DIR__ . '/../views/kategori/edit.php';
        require_once '../app/views/template/tutup_form.php';
        require_once '../app/views/template/footer.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->KategoriModel->update($id, $data);
        if ($updated) {
            header("Location: /kategori/index"); // Redirect to kategori list
        } else {
            echo "Failed to update kategori.";
        } 
    }

    // Process delete request
    public function delete($id) {
        $isUsedInProduk = $this->KategoriModel->checkIfKategoriInProduk($id);
        
        if ($isUsedInProduk > 0) {
            echo "<script> alert('data ini tidak bisa dihapus karena data ini masih dibutuhkan dengan tabel yang lain!!'); window.location.href = '/kategori/index'; </script>";
        } else {
        
            $deleted = $this->KategoriModel->delete($id);
            if ($deleted) {
                header("Location: /kategori/index"); 
                exit;
            } else {
                echo "Gagal menghapus kategori.";
            }
        }
    }
}
