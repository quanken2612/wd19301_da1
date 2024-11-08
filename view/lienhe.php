<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu 2024</title>
    <link rel="stylesheet" href="public/css/lienhe.css">
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

            <div class="diachi">
                <img src="./public/img/dinhvi.jpg" alt="">
                <h4>ĐỊA CHỈ</h4>
                <p>13 phố Trịnh Văn Bô, phường Phương Canh, quận Nam Từ Liêm, TP Hà Nội</p>

            </div>
            <div class="lienhe">
            <div class="logo dt">
            <img src="./public/img/phone.jpg" alt="">

            </div>
            <div class="logo">
            <img src="./public/img/face.jpg" alt="">

            </div>
            <div class="logo">
            <img src="./public/img/gmail.jpg" alt="">

            </div>
            </div>




            </div>
            <div class="boxphai">
                <div class="row mb">
                    <div class="boxtitle">
                        <h3>TÀI KHOẢN</h3>

                    </div>
                    <div class="boxcontent formtaikhoan">
                        <?php

                            if(isset($_SESSION["ho_ten"])){
                               
                                echo " Xin chào ".$_SESSION['ho_ten']." <br> <a href='../duanmau/admin'><button>Vào quản trị</button></a> ";

                            }else if(isset($_SESSION['nguoi_dung'])){

                                echo " Xin chào ".$_SESSION['nguoi_dung']." <br> <a href='?action=dangxuat'><button>đăng xuất</button></a> ";

                            }else{
                                    echo "<form action='?action=login' method='POST' enctype='multipart/form-data'>
                            Tên đăng nhập hoặc Email <br>
                            <input type='email' name='email' required><br>
                            Mật khẩu <br>
                            <input type='password' name='matkhau' required><br>
                            <button type='submit' name='login_user'>Đăng nhập</button>
                            
                        </form>";
                                }
    
    
                        ?>
                        <li><a href="">Quên Mật khẩu</a></li>
                        <li><a href="">Đăng kí thành viên</a></li>

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