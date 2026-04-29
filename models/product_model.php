<?php
require_once __DIR__ . '/../config/koneksi.php';

class product_model{
    private $db;
    public function __construct(){
        $this->db = databases :: getInstance()->getConnection();  
    }
    public function getAllproducts(){
        $stmt = $this->db->query("SELECT * FROM product");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getproductbyid($id){
    $stmt = $this->db->prepare("SELECT * FROM product WHERE id = ?");
    $stmt->execute([$id]); 
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
    public function addproduct($name,$price){
        $stmt = $this->db->prepare("INSERT INTO product(name,price) VALUES (?,?)");
        return $stmt->execute([$name,$price]);
    }
    public function updateproduct($id,$name,$price){
        $stmt = $this->db->prepare("UPDATE product SET name = ?, price = ? WHERE id = ?");
        return $stmt->execute([$name,$price,$id]);

    }
    public function deleteproduct($id){
        $stmt = $this->db->prepare("DELETE FROM product WHERE id = ?");
        return $stmt->execute([$id]);

    }    
}
?>
