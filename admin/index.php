<?php
session_start();

if (isset($_SESSION['ho_ten'])) {
    echo "<button><a href='?action=logout'>đăng xuất</a></button>";
    
}else{
    header('location:../index.php');
}



include "./controller/ProductController.php";

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

$productController= new ProductController();

switch($action){
    case 'home':
        $productController->home();
    
        break;
    case 'loaihang':
        $productController->LoaiHang();

        break;
    case 'danh_sach_loai':
        $productController->loadViewLoaiHang();

        break;
    case 'store_loai_hang':

        $productController->storeLoaiHang();

        break;
    case 'hanghoa':

        $productController->loadViewAddHangHoa();

        break;
    case 'store_hang_hoa':

        $productController->storeHangHoa();
        break;
    case 'xoa_loai_hang':

        $id=$_GET['id'];
        $productController->deleteLoaiHang($id);

        break;
    case 'edit_loai_hang':

        $id = $_GET['id'];
        $productController->loadViewEditLoaiHang($id);
        break;
    case 'update_loai_hang':

        $id = $_GET['id'];

        $productController->updateLoaiHang($id);

        break;

    case 'danh_sach_hang_hoa':

        $productController->LoadFullViewHangHoa();

        break;

    case 'xoa_hang_hoa':

        $id=$_GET['id'];
        $productController->deleteHangHoa($id);

        break;
    case 'edit_hang_hoa':

        $id = $_GET['id'];
        $productController->loadViewEditHangHoa($id);

        break;
    case 'update_hang_hoa':
        
        $id = $_GET['id'];
        $productController->storeUpdateHangHoa($id);

        
        break;
    case 'logout';
            
        $productController->logOut();

       break;

    case 'khachhang':

        $productController->addKhachHang();

        break;

    case 'add_khach_hang':

        $productController->storeAddKhachHang();

        break;

    case 'danh_sach_khach_hang':

        $productController->loadViewKhachHang();
 

        break;
    case 'edit_khach_hang':

        $id = $_GET['id'];
         
        $productController->loadViewEditKhachHang($id);

        break;
    case 'update_khach_hang':
        $id=$_GET['id'];
        $productController->storeKhachHang($id);

        break;
    case 'xoa_khach_hang':

        $id=$_GET['id'];
        $productController->deleteKhachHang($id);


        break;
    case 'binhluan':
        
        $productController->loadViewBinhLuan();

 
        break;

    case 'xoa_binh_luan':

        $id = $_GET['id'];

        $productController->deleteBinhLuan($id);

        break;


    }


?>