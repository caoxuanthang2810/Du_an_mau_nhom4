<?php
    require_once "./index.php";

    session_start();
    
    // var_dump($_SESSION["email"]);
    // var_dump($_SESSION["id_position"]);


    if(isset($_SESSION["email"]) && $_SESSION["email"] == "Admin@gmail.com"){
        header("location: ./dashboard/index.php");
    }else{
        echo "Bạn phải đăng nhập bằng quyền Admin thì mới vào được trang này";
    }
?>