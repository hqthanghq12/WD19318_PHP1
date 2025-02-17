<?php
//require_once 'models/ConnectDB.php';
//$con = new ConnectDB();
// để tất cả file trong thư mục model lên trước
// Xong mới đến controller
require_once 'models/Product.php';
require_once 'controllers/ProductController.php';
//$getAll = new Product();
//var_dump($getAll->getAllDataProduct());
$cProduct = new ProductController();
//$cProduct->getAllProduct();
//$cProduct->addProduct();
// Tạo ra thanh điều hướng
$luaChon = isset($_GET['act'])?$_GET['act']:"/";
switch ($luaChon){
    case 'getAllProduct':
        $cProduct->getAllProduct();
        break;
    case 'addProduct':
        $cProduct->addProduct();
        break;
    case 'editProduct':
        $cProduct->editDataProduct();
        break;
    default:
        $cProduct->getAllProduct();
        break;
}