<?php
    function pdo_get_connect(){
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
    
    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(),1);

        // Thêm mới loại
        // $sql = "Insert into loai(tenloai) value(?)";
        // pdo_execute($sql,$tenloai);

        try {
            $connect = pdo_get_connect();
            $stmt = $connect->prepare($sql);
            $stmt->execute($sql_args);
        } catch (\Throwable $th) {
            throw $th;
        }finally{
            unset($connect);
        }
    }

    // Truy vấn nhiều dữ liệu
    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(),1);

        // Thêm mới loại
        // $sql = "Insert into loai(tenloai) value(?)";
        // pdo_execute($sql,$tenloai);

        try {
            $connect = pdo_get_connect();
            $stmt = $connect->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetchAll();
            return $row;
        } catch (\Throwable $th) {
            throw $th;
        }finally{
            unset($connect);
        }
    }
?>