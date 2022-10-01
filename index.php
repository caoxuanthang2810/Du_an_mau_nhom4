<?php
    // header("location: Site/trangchu/");

    require "./global.php";
    require "./Dao/categories.php";
    require "./Dao/users.php";

    pdo_get_connect();

    // $cate = category_selectall();

    // var_dump($cate);

    $user = user_selectall();

    // var_dump($user);

    foreach($user as $row){
?>
        <div><?php echo $row ["email"]?></div>
<?php
    }
?>