<?php
include "../includes/connect.php";
include "../includes/help.php";


class ProductModel{

    public $conn;

    function __construct(){
        
        $this->conn=connectDB();
    }

    function addLoaiHang($ten_loai){

        $sql = "INSERT INTO loaihang (ten_loai) VALUES ('$ten_loai')";
        $this->conn->query($sql);
    }
    function getViewLoaiHang(){
        $sql = "SELECT * FROM loaihang";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function addHangHoa($ten_hh,$gia_tien,$giam_gia,$ngay_nhap,$mo_ta,$ma_loai,$img_path){

        $sql = "INSERT INTO hanghoa (ten_hh,don_gia,giam_gia,ngay_nhap,mo_ta,ma_loai,hinh) VALUES ('$ten_hh','$gia_tien','$giam_gia','$ngay_nhap','$mo_ta','$ma_loai','$img_path')";
        $this->conn->query($sql);
    }

    function DeleteLoaiHang($id){

        $sql = "DELETE FROM loaihang WHERE ma_loai = $id";
        $this->conn->query($sql);

    }

    function getLoaiHangById($id){

        $sql = "SELECT * FROM loaihang WHERE ma_loai = $id";

        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    function updateLoaiHangById($id,$ten_loai){

        $sql = "UPDATE loaihang SET ten_loai = '$ten_loai' WHERE ma_loai = '$id'";

        $this->conn->query($sql);
    }

    function getViewHangHoa(){
        $sql = "SELECT * FROM hanghoa";

        $result = $this->conn->query($sql);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function deleteHangHoaById($id){

        $sql = "DELETE FROM hanghoa WHERE id = '$id'";

        $this->conn->query($sql);
    }

    function getViewEditHangHoaById($id){

        $sql = "SELECT * FROM hanghoa WHERE id = '$id'";

        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);

    }

    function updateHangHoaById($ten_hh,$gia_tien,$giam_gia,$ngay_nhap,$mo_ta,$ma_loai,$img_path,$id){

        $sql = "UPDATE hanghoa
        SET ten_hh = '$ten_hh', don_gia = '$gia_tien', giam_gia = '$giam_gia', ngay_nhap = '$ngay_nhap', mo_ta = '$mo_ta', ma_loai = '$ma_loai', hinh = '$img_path'
        WHERE id = '$id'";
        $this->conn->query($sql);
    }

    function addKhachHang($ho_ten,$email,$mat_khau){

        $sql = "INSERT INTO khachhang (ho_ten,email,mat_khau) VALUES ('$ho_ten','$email','$mat_khau')";
        $this->conn->query($sql);

    }

    function getKhachHang(){

        $sql = "SELECT * FROM khachhang WHERE vai_tro = 1";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function getKhachHangById($id){

        $sql = "SELECT * FROM khachhang WHERE ma_kh = '$id'";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    function upDateKhachHang($id,$ho_ten,$email,$mat_khau){

        $sql = "UPDATE khachhang SET ho_ten = '$ho_ten',email = '$email',mat_khau = '$mat_khau'
        WHERE ma_kh = '$id'";
        $this->conn->query($sql);


    }

    function deleteUser($id){

        $sql = "DELETE FROM khachhang WHERE ma_kh = '$id'";
        $this->conn->query($sql);
    }

    function getBinhLuan(){

        $sql = "SELECT * FROM binhluan";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function deleteComment($id){

        $sql = "DELETE FROM binhluan WHERE ma_bl = '$id'";
        $this->conn->query($sql);
    }

    
}



?>