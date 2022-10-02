<?php
    function comment_selectall(){
        $sql = "SELECT * from comments";
        return pdo_query($sql);
    }

    function comment_insert($id){
        $sql = "INSERT INTO comments($id) VALUES('?')";
        pdo_execute($sql,$id);
    }
?>