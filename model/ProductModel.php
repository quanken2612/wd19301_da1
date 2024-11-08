<?php
include "./includes/connect.php";


class ProductModel{

    public $conn;

    function __construct(){
        
        $this->conn=connectDB();
    }

    function getAllProduct(){
        $sql = "SELECT * FROM hanghoa";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAllCategory(){
        $sql = "SELECT * FROM loaihang";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    function getProductDetail($id){
        $sql = "SELECT * FROM hanghoa WHERE id='$id'";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    function getBinhLuan($id){

        $sql = "SELECT * FROM binhluan WHERE ma_hh = '$id'";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAllProductCategory($id){
        $sql = "SELECT * FROM hanghoa WHERE ma_loai='$id'";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function upDateView($view,$id){
        $sql = "UPDATE hanghoa SET so_luot_xem = so_luot_xem + 1 WHERE id = '$id'";
        $this->conn->query($sql);
    }

    function getAllView(){
        $sql = "SELECT * FROM hanghoa ORDER BY so_luot_xem DESC LIMIT 10;";
        $result = $this->conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}



?>