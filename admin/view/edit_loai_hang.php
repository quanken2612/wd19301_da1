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
                <h1>CHỈNH SỬA LOẠI HÀNG</h1>

            </div>

            <div class="row body">
                <form class="form" action="?action=update_loai_hang&id=<?php echo $loaihang['ma_loai'] ?>" method="POST">
                    <div class="nhap">
                    Mã Loại Hàng: <br>
                    <input type="text" disabled placeholder="<?php echo $loaihang['ma_loai'] ?>"><br>
                    Tên Loại Hàng: <br>
                    <input type="text" value="<?php echo $loaihang['ten_loai'] ?>" name="ten_lh" required><br>
                    </div>
                    
                    <div class="button">
                        <button name="edit_lh" type="submit">Thêm mới</button>
                        <button type="reset">Nhập lại</button>
                        <button><a href="?action=danh_sach_loai">Danh sách</a></button>
                    </div>

                </form>

            </div>
        </div>
        

    </div>
    
</body>
</html>