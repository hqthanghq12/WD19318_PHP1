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
$cProduct->getAllProduct();