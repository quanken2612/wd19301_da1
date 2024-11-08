<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu 2024</title>
    <link rel="stylesheet" href="public/css/add.css">
</head>
<body>
    <div class="khung">
        <div class="row mb headeradmin">
            <h1>QUẢN TRỊ WEBSITE</h1>

        </div>


        <div class="row mb menu">
            <ul>
                <li><a href="?action=home">Trang chủ</a></li>
                <li><a href="?action=loaihang">Loại hàng</a></li>
                <li><a href="?action=hanghoa">Hàng hoá</a></li>
                <li><a href="?action=khachhang">Khách hàng</a></li>
                <li><a href="?action=binhluan">Bình luận</a></li>
                <li><a href="?action=thongke">Thống kê</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="row header">
                <h1>DANH SÁCH LOẠI HÀNG</h1>

            </div>

            <div class="row body">
                <table border='1' class="wide-table">
                    <thead>
                        <tr>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <td>chức năng 1</td>
                            <td>chức năng 2</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($loaihang as $loai) {
                        ?>
                            <tr>
                                <td><?php echo $loai['ma_loai'] ?></td>
                                <td><?php echo $loai['ten_loai'] ?></td>
                                <td><a href="?action=edit_loai_hang&id=<?php echo $loai['ma_loai'] ?>"><button type="button">sửa</button></a></td>
                                <td><a onclick="return confirm('Nếu xoá loại hàng thì hàng hoá liên quan cũng sẽ bị xoá')" href="?action=xoa_loai_hang&id=<?php echo $loai['ma_loai'] ?>"><button type="button">xoá</button></a></td>
                            </tr>
                            <?php
                              } 
                              ?>
                    </tbody>
                </table>

            </div>
        </div>
        

    </div>
    
</body>
</html>