<?php
    function position_selectall(){
        $sql = "select * from postion";
        return pdo_query($sql);
    }
?>