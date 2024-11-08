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
                <h1>CHỈNH SỬA KHÁCH HÀNG</h1>

            </div>

            <div class="row body">
                <form class="form" action="?action=update_khach_hang&id=<?php echo $khachhang['ma_kh'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="nhap">
                    Mã khách hàng: <br>
                    <input type="text" disabled placeholder="<?php echo $khachhang['ma_kh']?>"><br>
                    Tên khách hàng: <br>
                    <input type="text" name="ho_ten" value="<?php echo $khachhang['ho_ten']?>" required><br>
                    Email: <br>
                    <input type="text" name="email" value="<?php echo $khachhang['email']?>" required><br>
                    Mật khẩu: <br>
                    <input type="text" name="mat_khau" value="<?php echo $khachhang['mat_khau']?>" required><br>
                    </div>
                    
                    <div class="button">
                        <button name="update_kh" type="submit">Thêm mới</button>
                        <button type="reset">Nhập lại</button>
                        <a href="?action=khachhang"><button type="button">Danh sách khách hàng</button></a>
                    </div>

                </form>

            </div>
        </div>
        

    </div>
    
</body>
</html>