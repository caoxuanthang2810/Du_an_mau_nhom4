<?php
    require_once "../../DAO/pdo.php";
    require_once "../../DAO/users.php";

    if(isset($_GET['add'])){
        $VIEW_NAME = 'add.php';
    }else if(isset($_GET['update'])){
        $id = $_REQUEST['id'];
        $user_info = user_select_id($id);
        extract($user_info);
        //show dự liệu
        $item = user_selectall();
        $VIEW_NAME = 'update.php';
    }else if(isset($_GET['remove'])){
        $id = $_REQUEST['id'];
        user_delete($id);
        header("location:../users/index.php");
        die;
    }
    else{
        $item = user_selectall();
        $VIEW_NAME = 'list.php';
    }

    if(isset($_POST['btn_update'])){
        $password = $_POST["password"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $id_position = $_POST["id_position"];
        $id = $_REQUEST['id'];
        
        user_update($password,$fullname,$email,$phone,$address,$id_position,$id);
        
        $item = user_selectall();
        $VIEW_NAME = 'list.php';
    }
    include_once "../layout.php";
?>