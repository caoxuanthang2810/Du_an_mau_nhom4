<?php
    function user_selectall(){
        $sql = "select * from users";
        return pdo_query($sql);
    }
?>