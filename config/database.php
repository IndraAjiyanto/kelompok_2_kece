<?php
// config/database.php
class Database {
    private $host = 'localhost';
    private $db_name = '2D_klp2';
    private $username = '2D_klp2';
    private $password = '5!Eb9694f!W]6O/D';
    private $conn;

    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection error: " . $e->getMessage();
        }
        return $this->conn;
    }
}
