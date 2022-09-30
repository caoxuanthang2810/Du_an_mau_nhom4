<?php
    function category_selectall(){
        $sql = "select * from categories";

        return pdo_query($sql);
    }
?>