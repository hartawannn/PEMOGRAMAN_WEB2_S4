<?php
class databases {
    private static $instance = null;
    private $conn; 
    private $host = '127.0.0.1';
    private $user = 'root';
    private $pass = '1234567890';
    private $dbname = 'mvcphp7';

    private function __construct() {
    
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new databases();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}


try {
    $db = databases::getinstance();
    $koneksi = $db->getConnection();
   // echo "Koneksi Berhasil!";
} catch (PDOException $e) {
    //echo "Koneksi Gagal: " . $e->getMessage();
}
?>