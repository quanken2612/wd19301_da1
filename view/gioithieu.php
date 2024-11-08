<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu 2024</title>
    <link rel="stylesheet" href="public/css/gioithieu.css">
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
                <div class="row mb tieudetrai">
                    <h1>GIỚI THIỆU</h1>
                </div>
                <div class="noidungtrai">
                    <p>
                    Lời Giới Thiệu cho Trang Web Bán Đồ Điện Tử - HQ SHOP
Chào mừng bạn đến với HQ SHOP - điểm đến hàng đầu cho mọi nhu cầu về đồ điện tử của bạn!

Tại HQ SHOP, chúng tôi tự hào mang đến cho khách hàng những sản phẩm điện tử tiên tiến và chất lượng nhất trên thị trường. Với mục tiêu không ngừng nâng cao trải nghiệm mua sắm của bạn, chúng tôi luôn cập nhật những sản phẩm mới nhất từ các thương hiệu hàng đầu thế giới.

Tại sao chọn HQ SHOP?
Sản Phẩm Đa Dạng: Chúng tôi cung cấp một loạt các sản phẩm điện tử từ điện thoại di động, máy tính bảng, laptop, phụ kiện công nghệ cho đến các thiết bị gia dụng thông minh. Bạn có thể dễ dàng tìm thấy mọi thứ mình cần chỉ trong vài cú nhấp chuột.

Chất Lượng Đảm Bảo: Tất cả các sản phẩm của chúng tôi đều được kiểm tra nghiêm ngặt về chất lượng trước khi đến tay người tiêu dùng. Chúng tôi cam kết mang lại cho bạn những sản phẩm chính hãng và tốt nhất.

Giá Cả Cạnh Tranh: Với những chương trình khuyến mãi hấp dẫn và mức giá hợp lý, chúng tôi luôn cố gắng mang lại giá trị tốt nhất cho mỗi đồng tiền bạn bỏ ra.

Dịch Vụ Khách Hàng Xuất Sắc: Đội ngũ nhân viên tư vấn chuyên nghiệp và nhiệt tình của chúng tôi luôn sẵn sàng hỗ trợ bạn trong mọi bước của quá trình mua sắm. Chúng tôi coi trọng sự hài lòng của bạn và luôn lắng nghe để cải thiện dịch vụ.

Giao Hàng Nhanh Chóng và An Toàn: Chúng tôi hợp tác với các đối tác vận chuyển uy tín để đảm bảo rằng sản phẩm của bạn được giao đến tận tay một cách nhanh chóng và an toàn.

Sứ Mệnh của Chúng Tôi
Tại HQ SHOP, chúng tôi không chỉ bán sản phẩm mà còn mang đến cho bạn giải pháp công nghệ toàn diện. Sứ mệnh của chúng tôi là trở thành người bạn đồng hành đáng tin cậy, giúp bạn tiếp cận với những tiến bộ công nghệ hiện đại nhất để nâng cao chất lượng cuộc sống và công việc.

Kết Nối Với Chúng Tôi
Đừng quên kết nối với chúng tôi qua các kênh mạng xã hội để cập nhật những thông tin mới nhất về sản phẩm, chương trình khuyến mãi và những tin tức công nghệ thú vị. Hãy trở thành một phần của cộng đồng HQ SHOP để cùng nhau khám phá thế giới công nghệ đầy thú vị!

Cảm ơn bạn đã ghé thăm HQ SHOP. Chúng tôi rất hân hạnh được phục vụ và đồng hành cùng bạn trong hành trình trải nghiệm công nghệ.
                    </p>
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

                        <li><a href="?action=product_category&id=<?php echo $loai['ma_loai']; ?>"><?php echo $loai['ten_loai']; ?></a></li>
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