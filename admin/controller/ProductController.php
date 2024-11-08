<?php

include "./model/ProductModel.php";


class ProductController{
    public $productModel;


    function __construct(){
        $this->productModel = new ProductModel();
    }



    function home(){

        
    
        //load
        include "./view/home.php";
        
    }
    function LoaiHang(){
        include "./view/loaihang.php";
    }

    function storeLoaiHang(){
        if (isset($_POST['add_loai'])) {
            $ten_loai = $_POST['ten_loai'];


            $this->productModel->addLoaiHang($ten_loai);
        }

        header('location:?action=home');
    }

    function loadViewAddHangHoa(){

        $hanghoa = $this->productModel->getViewLoaiHang();

        include "./view/hanghoa.php";
    }

    function storeHangHoa(){
        if (isset($_POST['add_hh'])) {
            $ten_hh = $_POST['ten_hh'];
            $gia_tien = $_POST['gia_tien'];
            $giam_gia = $_POST['giam_gia'];
            $ngay_nhap = $_POST['ngay_nhap'];
            $mo_ta = $_POST['mo_ta'];
            $ma_loai = $_POST['ma_loai'];

            $img = $_FILES['anh'];

            

            //di chuyen anh den thu muc public/img
            $img_path = uploadFile($img);

            $this->productModel->addHangHoa($ten_hh,$gia_tien,$giam_gia,$ngay_nhap,$mo_ta,$ma_loai,$img_path);


        }

        header('location:?action=home');
    }

    function loadViewLoaiHang(){

        $loaihang = $this->productModel->getViewLoaiHang();

        include "./view/danh_sach_loai_hang.php";
    }

    function deleteLoaiHang($id){

        $this->productModel->DeleteLoaiHang($id);

        header('location:?action=danh_sach_loai');
    }

    function loadViewEditLoaiHang($id){

        $loaihang = $this->productModel->getLoaiHangById($id);

        include "./view/edit_loai_hang.php";
    }

    function updateLoaiHang($id){

        if (isset($_POST['edit_lh'])) {

            $ten_loai = $_POST['ten_lh'];

            $this->productModel->updateLoaiHangById($id,$ten_loai);

        }

        header('location:?action=danh_sach_loai');
    }

    function LoadFullViewHangHoa(){

        $hanghoa = $this->productModel->getViewHangHoa();

        include "./view/danh_sach_hang_hoa.php";
    }

    function deleteHangHoa($id){

        $this->productModel->deleteHangHoaById($id);

        header('location:?action=danh_sach_hang_hoa');

    }

    function loadViewEditHangHoa($id){

       $hanghoa = $this->productModel->getViewEditHangHoaById($id);
       $loaihang = $this->productModel->getViewLoaiHang($id);

       include "./view/edit_hang_hoa.php";
        
    }

    function storeUpdateHangHoa($id){

        if (isset($_POST['update_hh'])) {

            $ten_hh = $_POST['ten_hh'];
            $gia_tien = $_POST['gia_tien'];
            $giam_gia = $_POST['giam_gia'];
            $ngay_nhap = $_POST['ngay_nhap'];
            $mo_ta = $_POST['mo_ta'];
            $ma_loai = $_POST['ma_loai'];

            $img = $_FILES['anh'];

            if($img['size'] == 0){
                $product = $this->productModel->getViewEditHangHoaById($id);
                $img_path = $product['hinh'];

            }else{
                $img_path = uploadFile($img);
            }

            $this->productModel->updateHangHoaById($ten_hh,$gia_tien,$giam_gia,$ngay_nhap,$mo_ta,$ma_loai,$img_path,$id);


            
        }

        header('location:?action=danh_sach_hang_hoa');
    }



    function logOut(){

        unset($_SESSION["ho_ten"]);
        header("location:../index.php");
    }

    function addKhachHang(){

        include './view/khachhang.php';
    }

    function storeAddKhachHang(){

        if (isset($_POST['add_kh'])) {
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];

            $this->productModel->addKhachHang($ho_ten,$email,$mat_khau);
        }

        header('location:?action=danh_sach_khach_hang');
    }

    function loadViewKhachHang(){

        $khachhang = $this->productModel->getKhachHang();

        include './view/danh_sach_khach_hang.php';
    }

    function loadViewEditKhachHang($id){

        $khachhang = $this->productModel->getKhachHangById($id);

        include "./view/edit_khach_hang.php";
    }

    function storeKhachHang(){

        if (isset($_POST['update_kh'])) {
            
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];

            $this->productModel->addKhachHang($id,$ho_ten,$email,$mat_khau);

        }

        header('location:?action=danh_sach_khach_hang');
    }

    function deleteKhachHang($id){

        $this->productModel->deleteUser($id);

        header('location:?action=danh_sach_khach_hang');
    }

    function loadViewBinhLuan(){

        $binhluan = $this->productModel->getBinhLuan();

        include "./view/binhluan.php";
    }

    function deleteBinhLuan($id){


        $this->productModel->deleteComment($id);

        header('location:?action=binhluan');
    }





    


}




?>