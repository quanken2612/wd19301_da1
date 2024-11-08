<?php

include "./model/ProductModel.php";


class ProductController{
    public $productModel;


    function __construct(){
        $this->productModel = new ProductModel();
    }



    function showAll(){
        $products = $this->productModel->getAllProduct();
        $danhmuc = $this->productModel->getAllCategory();
        $top = $this->productModel->getAllView();

        //load
        include "./view/home.php";
        
        
        
    }

    function showAllGioiThieu(){
        $danhmuc = $this->productModel->getAllCategory();
        $top = $this->productModel->getAllView();

        include "./view/gioithieu.php";
    }

    function showAllLienHe(){
        $danhmuc = $this->productModel->getAllCategory();
        $top = $this->productModel->getAllView();

        include "./view/lienhe.php";
    }

    function showAllGopY(){
        $danhmuc = $this->productModel->getAllCategory();
        $top = $this->productModel->getAllView();

        include "./view/GopY.php";
    }
    function showAllHoiDap(){
        $danhmuc = $this->productModel->getAllCategory();
        $top = $this->productModel->getAllView();

        include "./view/HoiDap.php";
    }

    function showProductDetail($id,$view){
        $product = $this->productModel->getProductDetail($id);
        $view = $this->productModel->upDateView($view,$id);
        $danhmuc = $this->productModel->getAllCategory();
        $top = $this->productModel->getAllView();
        $binhluan = $this->productModel->getBinhLuan($id);

        include "./view/product_detail.php";
    }
    function showProduct_Category($id){
        $products = $this->productModel->getAllProductCategory($id);
        $top = $this->productModel->getAllView();
        
        $danhmuc = $this->productModel->getAllCategory();

        include "./view/product_category.php";
    }


}




?>