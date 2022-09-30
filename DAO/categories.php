<?php
    function category_selectall(){
        $sql = "select * from categories order by name";
        return pdo_query($sql);
    }
?>