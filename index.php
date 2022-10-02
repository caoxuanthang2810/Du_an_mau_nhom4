<?php
    //Chạy vào Trang Chủ

    // header("location: Site/trangchu.php");

    require "./Dao/categories.php";
    require_once "./global.php";
    // Xóa
    if(isset($_GET['id'])){
        category_delete($_GET['id']);
    }
    $dscate = category_selectall();

    foreach($dscate as $value){
        extract($value);
        $del_link = "index.php?id=".$id;
        echo '<li><a href="#">'.$name.'</a> - <a href="'.$del_link.'">del</a></li>';


    }

    if(isset($_POST['btn_submit'])){

        $name = $_POST['name'];
        category_insert($name);
    }

    // lấy bản ghi theo id
   


    

    
?>
<form action="index.php" method="POST">
        <input type="text" name="name">
        <br>
        <input type="submit" name="btn_submit" value="Thêm mới">

</form>