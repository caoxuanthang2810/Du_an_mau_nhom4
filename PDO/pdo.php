<?php
    require "./connect/connect.php";

    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(),1);

        // Thêm mới loại
        // $sql = "Insert into loai(tenloai) value(?)";
        // pdo_execute($sql,$tenloai);

        try {
            $connect = get_connect();
            $stmt = $connect->prepare($sql);
     } catch (\Throwable $th) {
            throw $th;
     }finally{
        unset($connect);
        }
    }

    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(),1);

        // Thêm mới loại
        // $sql = "Insert into loai(tenloai) value(?)";
        // pdo_execute($sql,$tenloai);

        try {
            $connect = get_connect();
            $stmt = $connect->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetchAll();
        } catch (\Throwable $th) {
            throw $th;
        }finally{
            unset($connect);
        }
    }
?>