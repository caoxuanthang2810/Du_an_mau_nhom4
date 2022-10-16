<?php
    require_once "../../DAO/pdo.php";
    require_once "../../DAO/capacity.php";

    if(isset($_GET['add'])){
        $VIEW_NAME = 'add.php';
    }else if(isset($_GET['update'])){
        $id = $_REQUEST['id'];
        $capacity_info = capacity_select_id($id);
        extract($capacity_info);

        $VIEW_NAME = 'update.php';
    }else if(isset($_GET['remove'])){
        $id = $_REQUEST['id'];
        capacity_delete($id);
        header("location:../capacity/index.php");
        die;
    }else{
        $items = capacity_selectall();
        $VIEW_NAME = 'list.php';
    }

    if(isset($_POST['btn_insert'])){

        $name = $_POST["name"];
        capacity_insert($name);

        $items = capacity_selectall();
        $VIEW_NAME = 'list.php';
    }
    
    if(isset($_POST['btn_update'])){
        $name = $_POST["name"];
        $id = $_GET["id"];

        capacity_update($name,$id);

        $items = capacity_selectall();
        $VIEW_NAME = 'list.php';
    }

    include_once "../layout.php";
?>