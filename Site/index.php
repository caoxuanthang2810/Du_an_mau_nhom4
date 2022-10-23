<?php

    require_once "../DAO/pdo.php";
    require_once "../DAO/users.php";
    require_once "../DAO/product.php";
    require_once "../DAO/comment.php";
    
    if(isset($_GET['danhmuc'])){
        $items = product_selectall();
        $VIEW_NAME = 'danhmuc.php';
    }else if(isset($_GET['gioithieu'])){
        $VIEW_NAME = 'gioithieu.php';     
    }else if(isset($_GET['hoidap'])){
        $VIEW_NAME = 'hoidap.php';   
    }else if(isset($_GET['login'])){

        $VIEW_NAME = 'login.php';   
    }else if(isset($_GET['register'])){

        $VIEW_NAME = 'register.php';   
    }else if(isset($_GET['cart'])){
        $VIEW_NAME = 'giohang.php';   
    }else if(isset($_GET['detail'])){
        $id = $_REQUEST['id'];

        $product_detail = product_select_all_innerjoin_id($id);

        // $id_categories = $_REQUEST["id_categories"];

        // var_dump($id_categories);

        // product_select_all_innerjoin_cate($id_categories);
        extract($product_detail);

        $VIEW_NAME = 'detail.php';
    }else if(isset($_GET['profile'])){
        // $id = $_POST["id"];
        $items = user_selectall(); 
        $VIEW_NAME = 'profile.php';   
    }else{
        $items = get_product_top();
        $pro = product_selectall();

        $VIEW_NAME = 'trangchu.php';
    }

    // if(isset($_POST['btn_register'])){
    //     $fullname=$_POST['fullname'];
    //     $email = $_POST["email"];
    //     $password = $_POST["password"];
    //     user_insert_register($password,$fullname,$email);
    //     $VIEW_NAME = 'login.php';
    // }

    // $VIEW_LOGIN = 'login-failed.php';
    // pdo_get_connect();

    if(isset($_POST["btn_login"])){
        $email = $_POST["email"];
        $password = sha1($_POST["password"]);


        // $items = user_login($email,$password);

        // var_dump($ỉtems);

        $sql = "SELECT * from users where email = '$email' AND password = '$password'";


        $Result = pdo_login($sql);
              
        // var_dump($Result);

        if($Result){
            if($email == $Result['email']){
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $id;   
                $VIEW_LOGIN = 'login-success.php';
                // echo("Đăng nhập thành công");
                $VIEW_NAME = 'trangchu.php';

                foreach($Result as $row){
                    if($row['id_position'] == "1"){
                        header("location: ../Admin/index.php");
                    }else if($row['id_position'] == "2"){
                        header("location: ./layout.php");
                    }else{
                        header("Location:index.php");
                    }
                }
            }
        }else{
            // echo("Đăng nhập thất bại");
            $VIEW_LOGIN = 'login-failed.php';
            $VIEW_NAME = 'login.php';
        }

    }

    // if(isset($_POST["btn_comment"])){
    //     $id_product = $_REQUEST['id'];
    //     $content = $_POST['content'];

    //     $id_user = $_SESSION['email'];
    //     $time = getdate();

    //     comment_insert($content,$time,$id_product,$id_user);
    // }

  include_once "./layout.php";
?>