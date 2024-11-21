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
        require_once '../app/views/user/index.php';

    }

    public function create() {
        require_once '../app/views/user/create.php';
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
        $user = $this->userModel->find($id); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/user/edit.php';
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
            header("Location: /user/index"); 
        } elseif ($isUsedInProduk > 0){
            header("Location: /user/index");
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