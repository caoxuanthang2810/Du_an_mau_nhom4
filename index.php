<?php
    require_once "./global.php";
    require_once "./DAO/users.php";
    require_once "./DAO/positions.php";
    require_once "./DAO/categories.php";

    // $password ="TriChua18";
    // $fullname = "Nguyễn Trọng Trí";
    // $email = "caubelangthang2003@gmail.com";
    // $phone = "0385088031";
    // $address = "Hà Nội";
    // $id_position = "1";
    $name = "Helper";

    // position_insert($name);

    // position_update($name,3);

    // position_delete(3);

    $data = category_select_id(1);

    var_dump($data);

    

    // user_insert($password,$fullname,$email,$phone,$address,$id_position);
    // position_insert($name);

    // category_insert($name);
    // var_dump($data);
    

    // $data = user_selectall();

    // var_dump($data);
//Thêm mới loại 
// if (isset($_POST['name'])) {
//     $name = $_POST['name'];
//     category_insert($name);
// }


// xóa
// if (isset($_GET['id'])) {
//     category_delete($_GET['id']);
// }
//load lại danh sách loại 

// $dsloai = category_selectall();


//var_dump($dsloai);

// foreach ($dsloai as $loai) {
//     extract($loai);
//     $del_link = "index.php?id=" . $id;
//     $edit_link = "edit.php?id=" . $id;
//     echo '<li> <a href="#">' . $name . '</a> - <a href="'.$del_link.'">del</a> - <a href="' .$edit_link.'">sửa</a></li>';
// }
?>


<!-- 

<br> <br>
<form action="index.php" method="post">
    <input type="text" name="name"> <br>
    <input type="submit" value="Thêm mới">
</form> -->
