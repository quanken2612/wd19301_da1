<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu 2024</title>
    <link rel="stylesheet" href="public/css/gopy.css">
</head>
<body>
    <div class="khung">
        <div class="row mb header">
            <h1>Siêu Thị Trực Tuyến</h1>

        </div>


        <div class="row mb menu">
            <ul>
                <li><a href="?action=home">Trang chủ</a></li>
                <li><a href="?action=gioithieu">Giới thiệu</a></li>
                <li><a href="?action=lienhe">Liên hệ</a></li>
                <li><a href="?action=gopy">Góp ý</a></li>
                <li><a href="?action=hoidap">Hỏi đáp</a></li>
            </ul>
        </div>
        <div class="row mb body">
            <div class="boxtrai mb">
                <div class="tieudetrai">
                    <h1>Đăng Ký</h1>
                </div>
                <div class="noidunggopy">
                    <form method="POST" action="?action=add_user">
                        <label for="ten">Họ và tên</label>
                        <input type="text" name="ten">
                        <label for="email">Email</label>
                        <input type="email" name="email">
                        <label for="sdt">Mật khẩu</label>
                        <input type="number" name="matkhau">
                        <button name="add_user" type="submit">Thêm mới</button>
                    </form>
                </div>


            </div>
            <div class="boxphai">
                <div class="row mb">
                    <div class="boxtitle">
                        <h3>TÀI KHOẢN</h3>

                    </div>
                    <div class="boxcontent formtaikhoan">


                    </div>

                </div>


                <div class="row mb">
                    <div class="boxtitle">
                        <h3>DANH MỤC</h3>


                    </div>
                    <div class="boxcontent2 menudoc">
                    <ul>
                    <?php
                        foreach ($danhmuc as $loai) {
                        ?>
                         
                        <li>
                            
                            <a href="?action=product_category&id=<?php echo $loai['ma_loai']; ?>"><?php echo $loai['ten_loai']; ?></a>
                        </li>
                        <?php
                        }
                        
                        ?>
                    </ul>
                        
                    </div>
                    <div class="boxfooter">
                        <input type="text">

                    </div>

                </div>


                <div class="row mb">
                    <div class="boxtitle">
                        <h3>Top 10 yêu thích</h3>

                    </div>
                    <div class="boxcontent2 menudoc">
                    
                    <ul>
                    <?php
                        foreach ($top as $view) {
                        ?>

                        <li>
                        <img src="<?php echo $view['hinh'] ?>" alt="">
                            <a href="?action=product_detail&id=<?php echo $view['id']; ?>&view=<?php echo $view['so_luot_xem']; ?>"><?php echo $view['ten_hh']; ?></a>
                        </li>
                        <?php
                        }
                        
                        ?>
                    </ul>
                    </div>

                </div>


            </div>
            
        </div>
        <div class="row mb footer">
            <h3>copyright © 2024</h3>
        </div>

    </div>
    
</body>
</html>