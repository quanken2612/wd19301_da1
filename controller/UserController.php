<?php

include "./model/UserModel.php";



class UserController{
    public $userModel;


    function __construct(){
        $this->userModel = new userModel();
    }

    function checkUser(){

        if (isset($_POST['login_user'])) {
            
            $email = $_POST['email'];
            $matkhau = $_POST['matkhau'];

            $user = $this->userModel->loginUser($email);

            

            if (!empty($user)) {
                if ($user['mat_khau'] == $matkhau) {
                    if ($user['vai_tro'] === 1) {

                        $_SESSION['nguoi_dung'] = $user['ho_ten'];
                        $_SESSION['id'] = $user['ma_kh'];
                        header('location:../duanmau');
                        exit();

                    }else {
                        $_SESSION['ho_ten'] = $user['ho_ten'];
                        header('location:../duanmau/admin');
                        exit();

                    }
                    
                }else{
                    echo "<script>alert('mat khau khong dung');</script> ";
                    

                }
            }else{
                echo "<script>alert('nguoi dung khong ton tai');</script>";
            }
        }



    }

    function dangKy(){
        $danhmuc = $this->userModel->getAllCategory();
        $top = $this->userModel->getAllView();

       include './view/dangky.php';
    }

    function storeUser(){


        if (isset($_POST['add_user'])) {
           $ten= $_POST['ten'];
           $email= $_POST['email'];
           $matkhau= $_POST['matkhau'];
           
           $this->userModel->addUser($ten,$email,$matkhau);

        }

        header('location:?action=home');
    }

    function logOut(){

        unset($_SESSION["nguoi_dung"]);
        header("location:./index.php");
    }

    function storeBinhLuan($id,$nd,$ten){

        if (isset($_POST['add_cmt'])) {

           $cmt = $_POST['comment'];


           
           $this->userModel->addComment($cmt,$id,$nd,$ten);
        }

        header('location:?action=home');

        

    }

    



    


}




?>