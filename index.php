<?php
    //Chạy vào Trang Chủ

    // header("location: Site/trangchu.php");

    require "./Dao/categories.php";
    require "./global.php";

    pdo_get_connect();

    $dscate = category_selectall();

    var_dump($dscate);
?>