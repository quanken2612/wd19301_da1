<?php

function connectDB(){
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "duanmau";



   try{
    $conn= new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);

    //set thuoc tinh
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;

   }catch (PDOException $e) {
    echo "loi: ".$e->getMessage();
}




}