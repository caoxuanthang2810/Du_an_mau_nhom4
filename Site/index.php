<?php

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
    include_once "./layout.php";


?>