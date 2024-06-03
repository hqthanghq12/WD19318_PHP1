<?php
//// luôn luôn phải class trước
//// khai bao class
//class SinhVien{
//    // Khai bao thuộc tính (bieen)
//    // Thêm mac dinh tu khoa public vào trước
//    public $maSV;
//    public $tenSV;
//    public $namSinh;
//    // khai bao phuong thuc
//    // ham tinh tuoi
//    public function tinhTuoi(){
//        return date('Y') - $this->namSinh;
//    }
//    public function noi(){
//        echo "Xin chao các ban nhé.";
//        echo $this->namSinh;
//        echo $this->tinhTuoi();
//    }
//    // Neu muon goi thuoc tinh hoac phuong thuc của ham thi
//    // can phai co tu khoa $this->ten thuoc tinh/phuong thuc
//}
//// khoi tao doi tuong
//$sv = new SinhVien();
//$sv->maSV = "PH123";
//$sv->tinhTuoi();
//$sv->noi();
//// them
//$sv1 = new SinhVien();
// Khai báo class giảng vieen
// Có những thuoc tinh sau
// maGV, tenGV, namSinh, gioiTinh, soGioDay, luongCoban
// Co phuong thưc sau
// Tinh tuoi (băng nam hie tai - nam sinh)
// hien thi thong tinh (Lay ra tat cả thong tinh mà gv có)
// Khoi tao doi tuong gv
// và gán trị cho các thuoc tinh, hien thi thong tin sau khi gan
class GiangVien{
//    Khai bao thuoc tinh
    public $maGV;
    public $tenGV;
    public $namSinh;
    // khác tương tự
    // Khai bao phương thuc
    // Mỗi một thuộc tính sẽ có 1 cặp get set của riêng nó
    // get lấy ra
    // set là đưa vào
    // Hàm khoi tạo
    // Hàm khơi tạo có thể tùy ý  thêm tham số và kl nhưng mong muôn
    // Nhưng tuyệt đối không return
    public function __construct($maGV = null, $tenGV = null, $namSinh = 0)
    {
        $this->maGV = $maGV;
        $this->tenGV = $tenGV;
        $this->namSinh = $namSinh;
    }

    public function getMaGV(){
        echo $this->maGV;
    }
    public function setMaGV($maGV){
        return $this->maGV = $maGV;
    }
    public function tinhTuoi(){
        return date('Y') - $this->namSinh;
    }
    public function hienThiThongTin(){
        echo $this->maGV;
        echo $this->tenGV;
        echo $this->namSinh;
        echo $this->tinhTuoi();
    }
}
// Khoi tao doi tuong
$gv = new GiangVien("Ph123", "Nguyen Văn", 2000);
//$gv->maGV = "0000123";
//$gv->setMaGV("0000123");
//$gv->getMaGV();
//$gv->tenGV = "Nguyen Thanh Trung";
//$gv->namSinh = 2000;
$gv->hienThiThongTin();