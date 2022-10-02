<?php
    function user_selectall(){
        $sql = "SELECT * from users";
        return pdo_query($sql);
    }

    function user_insert($id){
        $sql = "INSERT INTO users($id) VALUES('?')";
        pdo_execute($sql,$id);
    }
?>