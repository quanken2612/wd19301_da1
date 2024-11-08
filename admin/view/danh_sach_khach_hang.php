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
                <h1>DANH SÁCH Khách Hàng</h1>

            </div>

            <div class="row body">
                <table border='1' class="wide-table">
                    <thead>
                        <tr>
                            
                            <th>id</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Mật khẩu</th>
                            <th>chức năng 1</th>
                            <th>chức năng 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($khachhang as $user) {
                        ?>
                            <tr>
                                <td><?php echo $user['ma_kh'] ?></td>
                                <td><?php echo $user['ho_ten'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['mat_khau'] ?></td>
                                <td><a href="?action=edit_khach_hang&id=<?php echo $user['ma_kh'] ?>"><button type="button">sửa</button></a></td>
                                <td><a onclick="return confirm('xác nhận xoá')" href="?action=xoa_khach_hang&id=<?php echo $user['ma_kh'] ?>"><button type="button">xoá</button></a></td>
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