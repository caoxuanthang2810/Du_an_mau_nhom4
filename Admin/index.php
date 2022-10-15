<?php
    require_once "./index.php";

    session_start();

    if(isset($_SESSION["email"])){
        header("location: ./dashboard/index.php");
    }else{
        echo "Bạn phải đăng nhập bằng quyền Admin thì mới vào được trang này";
    }
?>