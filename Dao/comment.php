<?php
    function position_selectall(){
        $sql = "SELECT * from postion";
        return pdo_query($sql);
    }
?>