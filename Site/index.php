<?php

use LDAP\Result;

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

    if(isset($_GET["btn_login"])){
        $email = $_GET["email"];
        $password = $_GET["password"];

        // $items = user_login($email,$password);

        // var_dump($ỉtems);

        $sql = "SELECT * from users where email = '$email' AND password = '$password'";


        $Result = pdo_login($sql);

        if($Result){
            if($email == $Result['email']){
                $_SESSION['email'] = $email;
                $VIEW_NAME = 'trangchu.php';
                exit;
            }else{
                $VIEW_NAME = 'login.php';
            }
        }

    }


    include_once "./layout.php";
?>