<?php
    

    // Thực thi câu lệnh với database không cần dữ liệu trả về
    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(),1);
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
    // Lấy hết data trả về
    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(),1);

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

    //
    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(),1);

        try {
            $connect = pdo_get_connect();
            $stmt = $connect->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (\Throwable $th) {
            throw $th;
        }finally{
            unset($connect);
        }
    }

    const BASE_URL = "http://localhost/du_an_mau_nhom4/";
    const SITE_URL = BASE_URL . 'Site/index.php';
    const CONTENT_URL = BASE_URL . 'content/';
    const ADMIN_URL = BASE_URL . 'Admin/';
?>