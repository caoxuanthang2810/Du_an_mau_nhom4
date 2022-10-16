<?php
    require_once "../../DAO/pdo.php";
    require_once "../../DAO/colors.php";

    if(isset($_GET['add'])){
        $VIEW_NAME = 'add.php';
    }else if(isset($_GET['update'])){
        $id = $_REQUEST['id'];
        $color_info = color_select_id($id);
        extract($color_info);

        $VIEW_NAME = 'update.php';
    }else if(isset($_GET['remove'])){
        $id = $_REQUEST['id'];
        color_delete($id);
        header("location:../colors/index.php");
        die;
    }else{
        $items = color_selectall();
        $VIEW_NAME = 'list.php';
    }

    if(isset($_POST['btn_insert'])){

        $name = $_POST["name"];
        color_insert($name);

        $items = color_selectall();
        $VIEW_NAME = 'list.php';
    }
    
    if(isset($_POST['btn_update'])){
        $name = $_POST["name"];
        $id = $_GET["id"];

        color_update($name,$id);

        $items = color_selectall();
        $VIEW_NAME = 'list.php';
    }

    include_once "../layout.php";
?>