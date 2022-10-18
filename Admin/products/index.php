<?php
    require_once "../../DAO/pdo.php";
    require_once "../../DAO/product.php";
    require_once "../../DAO/capacity.php";
    require_once '../../DAO/product_color_detail.php';

    if(isset($_GET['add'])){
        $VIEW_NAME = 'add.php';
    }else if(isset($_GET['update'])){
        $id = $_REQUEST['id'];
        $product_info = product_select_id($id);
        extract($product_info);

        $VIEW_NAME = 'update.php';
    }else if(isset($_GET['remove'])){
        $id = $_REQUEST['id'];
        product_delete($id);
        header("location:../products/index.php");
        die;
    }else{
        $items_product = product_selectall();
        $VIEW_NAME = 'list.php';
    }
    if (isset($_FILES['image_file'])){
        $target_dir = '../../Asset/img/products/';
        $image = $_FILES['image']['name'];
        $target_file = $target_dir.$image;// điểm đầu
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $allowUpload = true;
        $allowtype = ['jpg','png','jpeg','gif'];// những kiểu đuôi file đc chấp nhận

        if(!in_array($imageFileType,$allowtype)){// in_array : kiểm tra $imageFileType có nằm trong mảng $allowtype hay k
            echo "File không được định dạng";
            $allowUpload = true;
        }
        if ($allowUpload == true){
            move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
        }
    }
    if(isset($_POST['btn_insert'])){
        $name = $_POST["name"];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
        $color = $_POST['color'];
        $capacity = $_POST['capacity'];
        $id_categories = $_POST['id_categories'];
        $bit_active = $_POST['bit_active'];
        product_insert($name,$image,$price,$detail,$bit_active,$color,$capacity,$id_categories);

        // $items_product = product_color();
        $VIEW_NAME = 'list.php';
    }
    
    if(isset($_POST['btn_update'])){
        $id = $_GET["id"];
        $name = $_POST["name"];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
        $color = $_POST['color'];
        $capacity = $_POST['capacity'];
        $id_categories = $_POST['categories'];
        $bit_active = $_POST['bit_active'];

        product_update($id,$name,$image,$price,$detail,$bit_active,$color,$capacity,$id_categories);

        // $items_product = product_color();
        $VIEW_NAME = 'list.php';
    }

    if(isset($_POST['capacity'])){
        $name = $_POST["name"];
        $id = $_GET["id"];

        capacity_update($name,$id);

        $items1 = capacity_selectall();
        $VIEW_NAME = 'list.php';
    }
    include_once "../layout.php";
?>