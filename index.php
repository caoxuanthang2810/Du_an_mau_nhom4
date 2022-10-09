<?php
    require_once "./global.php";
    require_once "./DAO/users.php";
    require_once "./DAO/positions.php";
    require_once "./DAO/categories.php";
    require_once "./DAO/capacity.php";

    header("location: Site/index.php");

    // $password ="TriChua18";
    // $fullname = "Nguyễn Trọng Trí";
    // $email = "caubelangthang2003@gmail.com";
    // $phone = "0385088031";
    // $address = "Hà Nội";
    // $id_position = "1";
    // $name = "Helper";

    // position_insert($name);

    // position_update($name,3);

    // position_delete(3);

    // $data = capacity_selectall();

    // var_dump($data);

    

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

<!-- <form action="" method="POST">
    <div>Email:</div> <input type="text" name="email">
    <div>Pass</div> <input type="text" name="password">
    <div>Họ và tên</div> <input type="text" name="fullname">
    <div>phone</div> <input type="text" name="phone">
    <div>Địa chỉ:</div> <input type="text" name="address">
    <button type="submit" name="btn">Gửi</button>
</form> -->

<?php
    // if(isset($_POST["btn"])){
    //     $email = $_POST["email"];
    //     $password = $_POST["password"];
    //     $fullname = $_POST["fullname"];
    //     $phone = $_POST["phone"];
    //     $address = $_POST["address"];
    //     $id_position = 2;

    //     user_insert($password,$fullname,$email,$phone,$address,$id_position);
    // }

?>