<?php
    require "./DAO/categories.php";
    require "./DAO/pdo.php";
    require "./DAO/Users.php";

    pdo_get_connect();

    $ds_user = user_selectall();

    var_dump($ds_user);
?>