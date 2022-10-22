<?php
    require_once "../../DAO/pdo.php";
    require_once "../../DAO/product.php";
    require_once "../../DAO/capacity.php";
    

    if(isset($_GET['add'])){
        $VIEW_NAME = 'add.php';
    }else if(isset($_GET['update'])){
        $id = $_REQUEST['id'];
        $product_info = product_select_id($id);
        extract($product_info);
        $item = product_selectall();
        $VIEW_NAME = 'update.php';
    }else if(isset($_GET['remove'])){
        $id = $_REQUEST['id'];
        product_delete($id);
        header("location:../products/index.php");
        die;
    }else{
        
        // $items = product_selectall();

        $items = product_select_all_innerjoin();

        // var_dump($items);
        
        // $product_color = product_color();
        // $product_capacity = product_capacity();
        
        $VIEW_NAME = 'list.php';
    }

    if(isset($_POST['btn_insert'])){
        $name = $_POST["name"];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
        $color = $_POST['color'];
        $capacity = $_POST['capacity'];
        $id_categories = $_POST['id_categories'];
        $bit_active = $_POST['bit_active'];

        if (isset($_FILES['image'])){
        
            $error = [];
    
            $target_dir = '../../Asset/img/products/';
            $image = $_FILES['image']['name'];
            $target_file = $target_dir . $image;
            $allowUpload = true;
            $allowtype = ['jpg', 'png', 'jpeg', 'gif'];
            $maxfilesize = 2000000;// kích cỡ lớn nhất mà file có thể upload (đơn vị bytes)
            // lấy phần mở rộng của file (tức là đuuôi file sau dấu chấm)
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
            if (!in_array($imageFileType, $allowtype)) {// in_array : kiểm tra $imageFileType có nằm trong mảng $allowtype hay k
                $error['img_type'] = "File không được định dạng";
                $allowUpload = false;
            }
            // kiểm tra kích thước file không vượt qua giới hạn cho phép
    
            if ($_FILES['image']['size'] > $maxfilesize) {
                echo " File không vượt quá " . $maxfilesize . "(Bytes)";
                $allowUpload = false;
            }
            // up loadfile
            if ($allowUpload == true) {
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            }
    
        }


        product_insert($name,$image,$price,$detail,$bit_active,$color,$capacity,$id_categories);


        
        // $items = product_selectall();

        $items = product_select_all_innerjoin();

        $VIEW_NAME = 'list.php';
    }
    
    if(isset($_POST['btn_update'])){
        $id = $_GET["id"];
        $name = $_POST["name"];
        $price = $_POST['price'];
        // $image = $_FILES['image_file']['name'];
        $detail = $_POST['detail'];
        $color = $_POST['color'];
        $capacity = $_POST['capacity'];
        $id_categories = $_POST['id_categories'];
        $bit_active = $_POST['bit_active'];

        
        product_update($id,$name,$price,$detail,$bit_active,$color,$capacity,$id_categories);

        // $items = product_selectall();

        $items = product_select_all_innerjoin();

        
        $VIEW_NAME = 'list.php';
    }

    
    include_once "../layout.php";
?>