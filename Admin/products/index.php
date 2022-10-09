<?php
    if(isset($_GET['add'])){
        $VIEW_NAME = 'add.php';
    }else if(isset($_GET['update'])){
        $VIEW_NAME = 'update.php';
    }else if(isset($_GET['remove'])){
        header("location:../product/index.php");
        die;
    }else{
        $VIEW_NAME = 'list.php';
    }

    include_once "../layout.php";
?>