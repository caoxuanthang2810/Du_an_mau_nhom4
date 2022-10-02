<?php
    function position_selectall(){
        $sql = "SELECT * from postion";
        return pdo_query($sql);
    }

    function position_insert($id){
        $sql = "INSERT INTO position($id) VALUES('?')";
        pdo_execute($sql,$id);
    }
?>