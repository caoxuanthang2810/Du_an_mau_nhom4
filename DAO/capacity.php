<?php
    function capacity_selectall(){
        $sql = "SELECT * from capacity";
        return pdo_query($sql);
    }

    function comment_insert($id){
        $sql = "INSERT INTO capacity($id) VALUES('?')";
        pdo_execute($sql,$id);
    }
?>