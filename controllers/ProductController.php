<?php
require_once __DIR__ . '/../config/koneksi.php';
require_once __DIR__ . '/../models/product_model.php';
class productcontroller{
    private $model;
    public function __construct(){
        $this->model = new product_model();
    }
    public function index(){
        $products = $this->model->getAllproducts();
        include __DIR__ . '/../Views/product_list.php'; 
    }
    public function create(){
        include __DIR__ . '/../views/product_form.php';
    }
    public function store(){
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $nama = $_POST['name'];
            $price= $_POST['price'];
            $this->model->addproduct($nama,$price);
            header("location:index.php");
        }

    }
    public function edit($id){
        $product = $this->model->getproductbyid($id);
        include __DIR__ . '/../views/product_form.php';
    }
    public function update($id){
        if($_SERVER['REQUEST_METHOD']==="POST"){
            $nama = $_POST['name'];
            $price = $_POST['price'];
            $this->model->updateproduct($id,$nama,$price);
            header('location:index.php?action=product_index');
        }
    }
    public function delete($id){
        $this->model->deleteproduct($id);
        header("location:index.php");
    }
}
?>