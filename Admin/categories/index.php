<?php
    require_once "../../DAO/pdo.php";
    require_once "../../DAO/categories.php";

    if(isset($_GET['add'])){
        $VIEW_NAME = 'add.php';
    }else if(isset($_GET['update'])){
        $id = $_REQUEST['id'];
        $category_info = category_select_id($id);
        extract($category_info);

        $VIEW_NAME = 'update.php';
    }else if(isset($_GET['remove'])){
        $id = $_REQUEST['id'];
        category_delete($id);
        header("location:../categories/index.php");
        die;
    }else{
        $items = category_selectall();
        $VIEW_NAME = 'list.php';
    }

    if(isset($_POST['btn_insert'])){

        $name = $_POST["name"];
        category_insert($name);

        $items = category_selectall();
        $VIEW_NAME = 'list.php';
    }
    
    if(isset($_POST['btn_update'])){
        $name = $_POST["name"];
        $id = $_GET["id"];

        category_update($name,$id);

        $items = category_selectall();
        $VIEW_NAME = 'list.php';
    }

    include_once "../layout.php";
?>