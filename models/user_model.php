<?php
require_once __DIR__ . '/../config/koneksi.php';

class usermodel {
    private $db;

    public function __construct() {
        // Memanggil koneksi database
        $this->db = databases::getInstance()->getConnection();
    }

    public function getAllUsers(){
        // Mengambil semua data user
        $stmt = $this->db->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id){
        // Perbaikan: hapus tanda : di depan ?
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addUser($name, $email){
        $stmt = $this->db->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        return $stmt->execute([$name, $email]);
    }

    public function updateUser($id_users, $name, $email){
        $stmt = $this->db->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
        return $stmt->execute([$name, $email, $id_users]);
    }

    public function deleteUser($id_users){
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id_users]);
    }

} // <--- KURUNG PENUTUP CLASS HARUS DI PALING BAWAH
?>