
<?php

session_start();

include "./controller/ProductController.php";
include "./controller/UserController.php";

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

$productController= new ProductController();
$userController = new UserController();

switch($action){
    case 'home':
        $productController->showAll();
    
        break;

    case 'gioithieu':
        $productController->showAllGioiThieu();

        
        break;

    case 'lienhe':
        $productController->showAllLienHe();

        break;

    case 'gopy':
        $productController->showAllGopY();
        
        break;
    case 'hoidap':
        $productController->showAllHoiDap();
        
        break;
    case 'product_detail':
        $id=$_GET['id'];
        $view=$_GET['view'];
        $productController->showProductDetail($id,$view);
        break;

    case 'product_category':
        $id=$_GET['id'];
        $productController->showProduct_Category($id);
        break;

    /* user */
    case 'login':
        $userController->checkUser();

        break;
    case 'dangky':

        $userController->dangKy();


        break;

    case 'add_user':

        $userController->storeUser();


        break;
    case 'dangxuat':

        $userController->logOut();


        break;
    case 'binh_luan':
        $id = $_GET['id'];
        $nd = $_GET['nd'];
        $ten = $_GET['ten'];
        $userController->storeBinhLuan($id,$nd,$ten);



        break;



    
    }


?>