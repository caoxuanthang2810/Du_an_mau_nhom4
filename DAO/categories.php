<?php
    function category_selectall(){
        $sql = "select * from categories order by name";
        return pdo_query($sql);
    }
    // update 
    function category_update(){
        $id = 1;
        $name = "IPhone";
        $sql = "UPDATE category SET name = '$name' WHERE id = '$id'";
        return pdo_query($sql);
    }
?>