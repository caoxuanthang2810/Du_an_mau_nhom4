<?php
    require_once "../DAO/pdo.php";
    require_once "../DAO/users.php";


    if(isset($_GET['danhmuc'])){
        $VIEW_NAME = 'danhmuc.php';
    }else if(isset($_GET['gioithieu'])){
        $VIEW_NAME = 'gioithieu.php';     
    }else if(isset($_GET['hoidap'])){
        $VIEW_NAME = 'hoidap.php';   
    }else if(isset($_GET['login'])){

        $VIEW_NAME = 'login.php';   
    }else if(isset($_GET['register'])){
        $VIEW_NAME = 'register.php';   
    }else if(isset($_GET['cart'])){
        $VIEW_NAME = 'giohang.php';   
    }else{
        $VIEW_NAME = 'trangchu.php';
    }

    if(isset($_POST["btn_login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $items = user_login($email,$password);

        var_dump($ỉtems);

    }


    include_once "./layout.php";
?>