<?php
if(isset($_POST['id'])){
    category_update($_POST['id'],$_POST['name']);
    header("location:index.php");
}
if(isset($_POST['id'])){
     $id = $_POST['id'];
      $update = get_categories($id);
      extract($name); // lay ten loai
?>
<form action="./edit_loai.php" method="post">
    <input type="text" name="name" value="<?=$name?>"><br>
    <input type="hidden" name="id" value="<?=$id?>">
    <button type="submit" name="gui">Cập nhật</button>
</form>

<?php }
?>
<form action="index.php" method="POST">
        <input type="text" name="name">
        <br>
        <input type="submit" name="btn_submit" value="Thêm mới">

</form>