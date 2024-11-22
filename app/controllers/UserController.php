<?php
// app/controllers/UserController.php
require_once '../app/models/User.php';
require_once '../app/models/Order.php';

class UserController {
    private $userModel;
    private $orderModel;

    public function __construct() {
        $this->userModel = new User();
        $this->orderModel = new Order();
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        $judul = "user";
        require_once '../app/views/template/navbar.php';
        require_once '../app/views/template/table.php';
        require_once '../app/views/user/index.php';        
        require_once '../app/views/template/tutup_table.php';        
        require_once '../app/views/template/footer.php';
    
    }

    public function create() {
        $judul = "user";
        $metode = "Tambah";
        require_once '../app/views/template/navbar.php';
        require_once '../app/views/template/form.php';
        require_once '../app/views/user/create.php';
        require_once '../app/views/template/tutup_form.php';
        require_once '../app/views/template/footer.php';
    }

    public function store() { 
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $alamat = $_POST['alamat'];
        $this->userModel->add($nama, $email, $password, $alamat);
        header('Location: /user/index');
    }
    // Show the edit form with the user data
    public function edit($id) {
        $user = $this->userModel->find($id);
        $judul = "user";
        $metode = "Edit"; // Assume find() gets user by ID
        require_once '../app/views/template/navbar.php';
        require_once '../app/views/template/form.php';
        require_once '../app/views/user/edit.php';
        require_once '../app/views/template/tutup_form.php';
        require_once '../app/views/template/footer.php';
    }

    // Process the update request
    public function update($id, $data) {
        $updated = $this->userModel->update($id, $data);
        if ($updated) {
            header("Location: /user/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id) {
        // Cek apakah user masih digunakan di tabel 'order'
        $isUsedInOrder = $this->userModel->checkIfUserInOrder($id);
        $isUsedInProduk = $this->userModel->checkIfUserInProduk($id);
        
        if ($isUsedInOrder > 0) {
            // Jika user masih digunakan di tabel order, tampilkan pesan error
            echo "<script> alert('data ini tidak bisa dihapus karena data ini masih dibutuhkan dengan tabel yang lain!!'); window.location.href = '/user/index'; </script>";
        } elseif ($isUsedInProduk > 0){
            echo "<script> alert('data ini tidak bisa dihapus karena data ini masih dibutuhkan dengan tabel yang lain!!'); window.location.href = '/user/index'; </script>";
        }
        else {
            // Jika user tidak digunakan, lanjutkan dengan penghapusan
            $deleted = $this->userModel->delete($id);
            if ($deleted) {
                header("Location: /user/index"); // Redirect ke halaman produk setelah penghapusan
                exit;
            } else {
                echo "Gagal menghapus user.";
            }
        }
    }
}