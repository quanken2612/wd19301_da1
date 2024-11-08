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
                <h1>DANH SÁCH BÌNH LUẬN</h1>

            </div>

            <div class="row body">
                <table border='1' class="wide-table">
                    <thead>
                        <tr>
                            
                            <th>Mã bình luận</th>
                            <th>Nội dung</th>
                            <th>Mã hàng hoá</th>
                            <th>Mã khách hàng</th>
                            <th>Ngày bình luận</th>
                            <th>chức năng</th>
          
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($binhluan as $cmt) {
                        ?>
                            <tr>
                                <td><?php echo $cmt['ma_bl'] ?></td>
                                <td><?php echo $cmt['noi_dung'] ?></td>
                                <td><?php echo $cmt['ma_hh'] ?></td>
                                <td><?php echo $cmt['ma_khach_hang'] ?></td>
                                <td><?php echo $cmt['ngay_binh_luan'] ?></td>
                                <td><a onclick="return confirm('xác nhận xoá')" href="?action=xoa_binh_luan&id=<?php echo $cmt['ma_bl'] ?>"><button type="button">xoá</button></a></td>
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