<?php 
    function get_connect(){
        $db_url = "mysql:host=202.92.5.49;dbname=gmkbrjnqhosting_nhom4;charset=utf8";
        $username = "gmkbrjnqhosting_nhom4";
        $password = "f0W9voiCVk05";
        
        try {
            $connect = new PDO($db_url,$username,$password);
            $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Kết nối thành công";
            return $connect;
        } catch (\Throwable $error) {
            echo "Kết nối thất bại: " . $error ->getMessage();
        }
    }
?>