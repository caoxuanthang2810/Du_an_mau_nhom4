<?php
require './DAO/categories.php';
require './global.php';
//Thêm mới loại 
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    category_insert($name);
}


// xóa
if (isset($_GET['id'])) {
    category_delete($_GET['id']);
}
//load lại danh sách loại 
$dsloai = category_selectall();


//var_dump($dsloai);
foreach ($dsloai as $loai) {
    extract($loai);
    $del_link = "index.php?id=" . $id;
    $edit_link = "edit.php?id=" . $id;
    echo '<li> <a href="#">' . $name . '</a> - <a href="' . $del_link . '">del</a> - <a href="' . $edit_link. '">sửa</a></li>';
}
?>




<br> <br>
<form action="index.php" method="post">
    <input type="text" name="name"> <br>
    <input type="submit" value="Thêm mới">
</form>