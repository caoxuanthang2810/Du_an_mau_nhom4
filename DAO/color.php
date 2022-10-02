<?php
    function color_selectall(){
        $sql = "SELECT * from colors";
        return pdo_query($sql);
    }

    function color_insert($id){
        $sql = "INSERT INTO colors($id) VALUES('?')";
        pdo_execute($sql,$id);
    }
?>