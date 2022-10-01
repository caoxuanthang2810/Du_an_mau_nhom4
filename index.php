<?php

    require "./global.php";
    require "./Dao/categories.php";

    pdo_get_connect();

    $cate = category_selectall();

    // var_dump($cate);
?>