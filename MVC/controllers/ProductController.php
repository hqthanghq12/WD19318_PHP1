<?php
class ProductController{
    // Mỗi 1 chuc năng ung voi 1 PT xu ly
    // Hien thi tat du lieu ra view của bang product
    public function getAllProduct(){
//        var_dump($_POST['name']);
        $modelProduct = new Product();
        $listProduct = $modelProduct->getAllDataProduct();
//        var_dump($listProduct);
        include_once 'views/list.php';
    }
    public function addProduct(){
//        echo $_POST['name'];
        // Kiểm tra xem người dùng có bấm vào nut Gửi k
        if(isset($_POST['btn-submit'])){
//            echo $_POST['name'];
//            Xử lý file
            var_dump($_FILES['image']);
            // Thông số khi upload file
//            $_FILES['tenbien']['name']: Tên file upload
//            $_FILES['tenbien']['type']: Định dạng file upload
//            $_FILES['tenbien']['size']: Kich thuoc file upload
//            $_FILES['tenbien']['tmp_name']: Tên file (Tạm thời) khi được lưu trữ trên máy chủ
//            $_FILES['tenbien']['error']: Mã lỗi
//            $_FILES['tenbien']['full_path']: Đường dẫn đầy đủ do trình duyệt gửi
//            Upload file ảnh
//            b1: Lấy địa chỉ thư mục chứa ảnh
                $target_dir = "images/";
//            B2: Lấy tên ảnh
                $name_img = time().$_FILES['image']['name'];
//            B3: tạo ra 1 biết ghép tên ảnh vào thư mục chứa ảnh
                $target_path = $target_dir.$name_img; // images/tenfile
//            B4: di chuyên file ảnh vào thư mục
            move_uploaded_file($_FILES['image']['tmp_name'],  $target_path);
            // Thêm vào CSDL
//            Khởi tạo model Product
            $mPro = new Product();
            $check = $mPro->insertDataProduct(null, $_POST['name'], $_POST['price'],  $target_path, $_POST['quantity'],1);
            if(!$check){
                echo "Thêm thành công";
            }
        }
        include_once 'views/add.php';
    }
    public function editDataProduct(){
       if(isset($_GET['id'])){
//            echo $_GET['id'];
//           thực hiện truy vấn để lấy ra thông tin cũ
           $mPro = new Product();
           $editPro = $mPro->getIdDataProduct($_GET['id']);
//           var_dump($editPro);
           if(isset($_POST['btn-submit'])){
//            Upload file ảnh
//            b1: Lấy địa chỉ thư mục chứa ảnh
               $target_dir = "images/";
//            B2: Lấy tên ảnh
               $name_img = time().$_FILES['image']['name'];
//            B3: tạo ra 1 biết ghép tên ảnh vào thư mục chứa ảnh
               $target_path = $target_dir.$name_img; // images/tenfile
//            B4: di chuyên file ảnh vào thư mục
               move_uploaded_file($_FILES['image']['tmp_name'],  $target_path);
               // Thêm vào CSDL
//            Khởi tạo model Product
               $mPro = new Product();
               $check = $mPro->updateDataProduct( $_POST['name'], $_POST['price'],  $target_path, $_POST['quantity'],1,$_GET['id']);
               if(!$check){
                   echo "Thêm thành công";
               }
           }

        }
        include_once 'views/edit.php';
    }
}