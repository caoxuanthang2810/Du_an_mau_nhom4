<?php
    require_once '../global.php';
if (isset($_GET['danhmuc'])) {

    $VIEW_NAME = 'danhmuc.php';
} elseif (isset($_GET['gioithieu'])) {
    $VIEW_NAME = 'gioithieu.php';
} elseif (isset($_GET['hoidap'])) {
    $VIEW_NAME = 'hoidap.php';
} else {
    $VIEW_NAME = 'home.php';
}


include_once './layout.php';
?>