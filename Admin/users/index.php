<?php
    require_once "../../DAO/pdo.php";
    require_once "../../DAO/users.php";

    if(isset($_GET['add'])){
        $VIEW_NAME = 'add.php';
    }else if(isset($_GET['update'])){
        $VIEW_NAME = 'update.php';
    }else if(isset($_GET['remove'])){
        header("location:../users/index.php");
        die;
    }else{
        $item = user_selectall();
        $VIEW_NAME = 'list.php';
    }

    include_once "../layout.php";
?>