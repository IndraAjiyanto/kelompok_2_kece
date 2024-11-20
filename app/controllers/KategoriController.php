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
        require_once '../app/views/kategori/index.php';
    }

    public function create() {
        require_once '../app/views/kategori/create.php';
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
        require_once __DIR__ . '/../views/kategori/edit.php';
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
        $deleted = $this->KategoriModel->delete($id);
        if ($deleted) {
            header("Location: /kategori/index"); // Redirect to kategori list
        } else {
            echo "Failed to delete kategori.";
        }
    }
}
