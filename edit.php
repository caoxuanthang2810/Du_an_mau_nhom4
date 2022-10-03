<?php
require "./DAO/categories.php";
require "./global.php";


if (isset($_POST['id'])) {
    category_update($_POST['id'], $_POST['name']);
    header('location: index.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $loai_info = category_select_id($id);
    extract($loai_info);
?>
    <form action="edit.php" method="post">
        <input type="text" name="name" value="<?= $name ?>">
        <br>
        <input type="text" name="id" value="<?= $id ?>" readonly>
        <input type="submit" value="Cap nhật">

    </form>
<?php }
?>