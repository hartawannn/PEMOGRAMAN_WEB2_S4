<?php
//require_once __DIR__ . '/../CONTROL/Product_Controllers.php';
// require_once __DIR__ . '/../CONTROL/Product_Controllers.php'; // Abaikan yang ini
// 1. Panggil filenya dulu (Pastikan nama file di folder SAMA PERSIS)
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/controllers/UserController.php'; // Baris ini harus ada!

// 2. Baru buat objeknya
$productController = new ProductController();
$userController = new UserController(); // Sekarang PHP sudah kenal class ini
$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch($action){
    case 'home':
        include __DIR__ . '/views/home.php'; // Hapus /../
        break;
    
    case'create':
        $productController->create();
        break;
    case'store':
        $productController->store();
        break;
    case'edit':
        $productController->edit($id);
        break;
    case'update':
        $productController->update($id);
        break; 
    case'delete':
        $productController->delete($id);
        break;
        //route user
    case'user_index':
        $userController->index();
        break; 
    case'user_create':
        $userController->create();
        break;
    case'user_store':
        $userController->store();
        break;
    case'user_edit':
        $userController->edit($id);
        break;
    case'user_update':
        $userController->update($id);
        break;
    case'user_delete':
        $userController->delete($id);
        break;
        default:
        include'views/home.php';
        break;
}
?>