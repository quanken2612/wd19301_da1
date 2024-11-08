<?php
require_once './includes/connect.php';


class userModel{

    public $conn;

    function __construct(){
        
        $this->conn=connectDB();
    }

    function loginUser($email){

        $sql = "SELECT * FROM khachhang WHERE email = '$email'";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);

    }

    function getAllCategory(){
        $sql = "SELECT * FROM loaihang";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAllView(){
        $sql = "SELECT * FROM hanghoa ORDER BY so_luot_xem DESC LIMIT 10;";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function addUser($ten,$email,$matkhau){


        $sql = "INSERT INTO khachhang (ho_ten,email,mat_khau) VALUES ('$ten','$email','$matkhau')";
        $this->conn->query($sql);
    }

    function addComment($cmt,$id,$nd,$ten){

        $sql = "INSERT INTO binhluan (noi_dung,ma_hh,ma_khach_hang,ten_kh) VALUES ('$cmt','$id','$nd','$ten')";
        $this->conn->query($sql);
    }



    



    

}



?>