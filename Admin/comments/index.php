<?php
    // if(isset($_GET['add'])){
    //     $VIEW_NAME = 'add.php';
    // }else if(isset($_GET['update'])){
    //     $VIEW_NAME = 'update.php';
    // }else if(isset($_GET['remove'])){
    //     header("location:../comments/index.php");
    //     die;
    // }else{
    //     $VIEW_NAME = 'list.php';
    // }

    // include_once "../layout.php";
?>
<?php
    require_once "../../DAO/pdo.php";
    require_once "../../DAO/comment.php";


    if(isset($_GET['update'])){
        $id = $_REQUEST['id'];
        $comment_info = comment_select_id($id);
        extract($comment_info);

        $VIEW_NAME = 'update.php';
    }else if(isset($_GET['remove'])){
        $id = $_REQUEST['id'];
        comment_delete($id);
        header("location:../comments/index.php");
        die;
    }else{
        $items = comment_select();
        $VIEW_NAME = 'list.php';
    }

    if(isset($_POST['btn_insert'])){

        $content = $_POST["content"];
        $time=$_POST['time'];
        $id_product=$_POST['id_product'];
        $id_user=$_POST['id_user'];
        comment_insert($content,$time,$id_product,$id_user);

        $items = comment_selectall();
        $VIEW_NAME = 'list.php';
    }
    
    if(isset($_POST['btn_update'])){
        $content = $_POST["content"];
        $time = $_POST['time'];
        $id = $_GET["id"];
        // $id_product = $_POST["id_product"];
        // $id_user = $_POST["id_user"];


        comment_update($content,$time,$id_product,$id_user,$id);

        $items = comment_select();
        $VIEW_NAME = 'list.php';
    }
    

    include_once "../layout.php";
?>