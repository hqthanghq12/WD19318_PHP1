<?php
// Tuần tự
// key tăng tự động theo số lượng phần tử
// c1: $tenmang= array(gtr1, gtr2, ..., gtn);
// c2: $tenmang = [gtr1, gtr2, ...., gtrn];
$arrayTT = [5,6,7,8,9,10];
// hiện thị mảng
echo "<pre>";
print_r($arrayTT);
// lấy giá trị trong mảng
// $tenmang[vị trí]
echo $arrayTT[3];
// có for hoặc foreach duyệt mảng
//for($i = 0; $i < count($arrayTT); $i++){
//    echo $arrayTT[$i];
//}
// Liên hợp
// key do dev quyet dinh
// khai bao
// $tenmang = array( key1 => gtr1, ...., keyn => gtrn);
// $tenmang = [key1 => gtr1, ...., keyn => gtrn];
$arrayLH = ["a"=>5, 6=>"b", "c"=>"d"];
// hiện thị
print_r($arrayLH);
// lấy giá trị
echo $arrayLH[6];
// duyệt mảng
foreach ($arrayLH as $k => $v){
    echo $k;
}
// mảng 2 chiều liên hợp
$arraySV = [
    [
        "hoten"=>"Nguyễn Văn A",
        "namsinh" =>2004
    ],
    [
        "hoten"=>"Nguyễn Văn B",
        "namsinh" =>2004
    ]
];
print_r($arraySV);

