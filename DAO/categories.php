<?php
    function category_selectall(){
        // Thêm mới loại
        // $sql = "Insert into loai(tenloai) value(?)";
        // pdo_execute($sql,$tenloai);

        $sql = "SELECT * from categories order by name";
        return pdo_query($sql);
    }

    
?>