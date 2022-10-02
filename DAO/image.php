<?php
    function image_selectall(){
        $sql = "SELECT * from image";
        return pdo_query($sql);
    }

    function comment_insert($id){
        $sql = "INSERT INTO image($id) VALUES('?')";
        pdo_execute($sql,$id);
    }
?>