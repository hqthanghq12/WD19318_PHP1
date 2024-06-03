<?php
class ProductController{
    // Mỗi 1 chuc năng ung voi 1 PT xu ly
    // Hien thi tat du lieu ra view của bang product
    public function getAllProduct(){
        $modelProduct = new Product();
        $listProduct = $modelProduct->getAllDataProduct();
//        var_dump($listProduct);
        include_once 'views/list.php';
    }
}