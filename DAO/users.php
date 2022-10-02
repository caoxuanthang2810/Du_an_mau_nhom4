<?php
    function user_selectall(){
        $sql = "SELECT * from users";
        return pdo_query($sql);
    }
?>