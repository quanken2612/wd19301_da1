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
                <h1>CHỈNH SỬA HÀNG HOÁ</h1>

            </div>

            <div class="row body">
                <form class="form" action="?action=update_hang_hoa&id=<?php echo $hanghoa['id'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="nhap">
                    Mã hàng hoá: <br>
                    <input type="text" disabled placeholder="<?php echo $hanghoa['id']?>"><br>
                    Tên hàng hoá: <br>
                    <input type="text" name="ten_hh" value="<?php echo $hanghoa['ten_hh']?>" required><br>
                    Giá tiền: <br>
                    <input type="number" name="gia_tien" value="<?php echo $hanghoa['don_gia']?>" required><br>
                    Giảm giá: <br>
                    <input type="number" name="giam_gia" value="<?php echo $hanghoa['giam_gia']?>" required><br>
                    ngày nhập: <br>
                    <input type="date" name="ngay_nhap" value="<?php echo $hanghoa['ngay_nhap']?>" required><br>
                    Mô tả: <br>
                    <input type="text" name="mo_ta" value="<?php echo $hanghoa['mo_ta']?>" required><br>
                    Mã loại: <br>
                    <select name="ma_loai" id="">
                        <?php
                         foreach ($loaihang as $item) {
                        ?>

                           <option <?php if($hanghoa['ma_loai'] == $item['ma_loai']) echo 'selected'?> value="<?php echo $item['ma_loai'];?>"><?php echo $item['ten_loai'];?></option>
                        <?php
                           } 
                           ?>
                    </select><br>
                    Ảnh: <br>
                    <div class="imgedithh"><img src=".<?php echo $hanghoa['hinh'] ?>" alt=""></div>
                    <input type="file" name="anh"> <br>
                    </div>
                    
                    <div class="button">
                        <button name="update_hh" type="submit">Thêm mới</button>
                        <button type="reset">Nhập lại</button>
                        <a href="?action=danh_sach_hang_hoa"><button type="button">Danh sách Hàng Hoá</button></a>
                    </div>

                </form>

            </div>
        </div>
        

    </div>
    
</body>
</html>