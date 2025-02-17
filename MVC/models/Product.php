<?php
require_once 'ConnectDB.php';
class Product{
    // Tạo thuộc tính kết nối
    public $connect;
    public function __construct()
    {
        $this->connect = new ConnectDB();
    }
    // Mỗi một câu lệnh truy vấn hoặc câu lệnh thao tác(Thêm, Sửa, Xóa)
    // ta cần sinh ra 1 pt cho việc đó
    // Tip: Luôn luôn phải thực hiện trước các câu lênh trên MYSQL rồi mới được 
    // phép đưa vào code
    // Cần lưu ý
    // + Câu lệnh truy vấn (Là những câu SELECT)
    // TH1: Nếu câu truy trả về nhiều bản ghi và pt không có tham số
    //  (xem khi chạy câu lệnh trên MYSQL) thì gọi đên hàm loadData()
    // TH2: Nếu câu truy trả về nhiều bản ghi và pt có tham số
    //  (xem khi chạy câu lệnh trên MYSQL) thì gọi đên hàm 
    // loadData([tham số 1, tham số 2,..., tham số n])
    // TH3: Nếu câu truy trả về 1 bản ghi và pt không có tham số
    //  (xem khi chạy câu lệnh trên MYSQL) thì gọi đên hàm loadData([], false)
    // TH4: Nếu câu truy trả về 1 bản ghi và pt  có tham số
    //  (xem khi chạy câu lệnh trên MYSQL) thì gọi đến 
    // hàm loadData([tham số 1, tham số 2,..., tham số n], false)
    // Nếu thao tác thì gọi đến execute();
    /////////////////////////////////////
    // lấy tất cả bản ghi của bảng Product
    public function getAllDataProduct(){
        // b1: Viết câu lệnh SQL
        $sql = "SELECT * FROM products;";
        // b2: Luôn luôn gọi đến setQuery()
        $this->connect->setQuery($sql);
        // b3: xác định hàm
       return $this->connect->loadData();
    }
    public function insertDataProduct($id, $name, $price, $image, $quantity, $status){
        $sql = "INSERT INTO `products` VALUES (?,?,?,?,?,?)";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$id, $name, $price, $image, $quantity, $status]);
    }
    public function getIdDataProduct($id){
        $sql = "SELECT * FROM `products` WHERE id = ?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$id], false);
    }
    public function updateDataProduct($name, $price, $image, $quantity, $status, $id){
        $sql = "UPDATE `products` SET `name`= ?,`price`= ?,`image`= ?,`quantity`= ?,`status`= ? WHERE `id`= ?";
        $this->connect->setQuery($sql);
        return $this->connect->loadData([$name, $price, $image, $quantity, $status, $id], false);
    }
}