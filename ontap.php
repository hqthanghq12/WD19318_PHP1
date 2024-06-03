<?php
// Bài tập
// Hiển thị ra tất các số theo yêu cầu sau
// Số chẵn (Từ 1 - 100)
// Số nguyên tố (Từ 1 - 100)
//  dùng for
//  while, do while
  
    for($i= 2; $i <= 100; $i++){
        $flag = true;
        for($j = 2; $j < $i/2; $j++){
            if($i % $j == 0){
                $flag = false;
                break;
            }
        }
        if($flag == true){
            echo $i.";";
        }
    }
?>