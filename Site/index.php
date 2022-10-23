<?php

    require_once "../DAO/pdo.php";
    require_once "../DAO/users.php";
    require_once "../DAO/product.php";
    require_once "../DAO/comment.php";
    // Session cũng là một cách để lưu thông tin của người dùng để sử dụng trên nhiều trang. 
    // Session khác với Cookies ở chỗ, session được lưu ở máy chủ thay vì lưu ở máy người dùng. 
    // Do đó, ngay khi thoát trình duyệt, session sẽ bị mất.


    // sự giống nhau và khác nhau giữa require và include
    // - sự giống nhau: require và include đều dùng để import file php khác vào file php đang chạy
    // - sự khác nhau: 
    // + require: import file khác, nếu import lỗi => các câu lệnh bên dưới sẽ dừng
    // + include: import file khác, nếu import lỗi => các câu lệnh bên dưới vẫn chạy


//     PHP _GET và _POST là hai phương thức dùng để thu thập dữ liệu form, đây cũng là phương thức dùng để chuyển dữ liệu từ máy cá nhân (client) lên máy chủ (server).
// Cả hai _GET và _POST đều tạo một mảng với cặp key/value, với key chính là thuộc tính name của các thành phần form, còn value chính là giá trị của thành phần đó với name tương ứng.
// _GET thường dùng cho dữ liệu không quan trọng, không cần bảo mật, thể hiện rõ trên tham số khi submit hay click từ liên kết.
// _POST thường dùng cho dữ liệu quan trọng, cần bảo mật như thông tin login, payment, ... _POST nhận được thông qua phương thức HTTP.



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