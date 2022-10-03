<?php
    //dqwdwqqw
    function position_selectall(){
        $sql = "SELECT * from position";
        return pdo_query($sql);
    }
?>