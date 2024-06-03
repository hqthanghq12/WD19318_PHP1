<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sản phẩm</title>
</head>
<body>
<table>
    <tr>
        <td>ID</td>
        <td>Tên</td>
        <td>Giá</td>
        <td>Hình ảnh</td>
        <td>Số lượng</td>
        <td>Trang thái</td>
    </tr>
    <?php
//    var_dump($listProduct);
    foreach ($listProduct as $value){
    ?>
        <tr>
            <td><?php echo $value->id ?></td>
            <td><?php echo $value->name ?></td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    <?php }?>
</table>
</body>
</html>