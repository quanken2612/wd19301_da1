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
                <h1>DANH SÁCH HÀNG HOÁ</h1>

            </div>

            <div class="row body">
                <table border='1' class="wide-table">
                    <thead>
                        <tr>
                            <th>ảnh</th>
                            <th>id</th>
                            <th>Tên hàng hoá</th>
                            <th>đơn giá</th>
                            <th>giảm giá</th>
                            <th>ngày nhập</th>
                            <th>mô tả</th>
                            <th>số lượt xem</th>
                            <th>mã loại</th>
                            <th>chức năng 1</th>
                            <th>chức năng 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hanghoa as $hang) {
                        ?>
                            <tr>
                                <td class="imghanghoa"><img src=".<?php echo $hang['hinh'] ?>" alt=""></td>
                                <td><?php echo $hang['id'] ?></td>
                                <td><?php echo $hang['ten_hh'] ?></td>
                                <td><?php echo $hang['don_gia'] ?></td>
                                <td><?php echo $hang['giam_gia'] ?></td>
                                <td><?php echo $hang['ngay_nhap'] ?></td>
                                <td><?php echo $hang['mo_ta'] ?></td>
                                <td><?php echo $hang['so_luot_xem'] ?></td>
                                <td><?php echo $hang['ma_loai'] ?></td>
                                <td><a href="?action=edit_hang_hoa&id=<?php echo $hang['id'] ?>"><button type="button">sửa</button></a></td>
                                <td><a onclick="return confirm('xác nhận xoá')" href="?action=xoa_hang_hoa&id=<?php echo $hang['id'] ?>"><button type="button">xoá</button></a></td>
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