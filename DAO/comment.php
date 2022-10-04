<?php
    require_once "./global.php";

    // Gọi tất cả bảng
    function comment_selectall(){
        $sql = "SELECT * from comments";
        return pdo_query($sql);
    }
    
    // Gọi hàm Bình luận theo id
    function comment_select_id($id){
        $sql = "SELECT * from comments where id=?";
        return pdo_query_one($sql,$id);
    }

    // Thêm mới Bình luận
    function comment_insert($content,$time,$id_product,$id_user){
        $sql = "INSERT INTO comments(content,time,id_product,id_user) VALUES(?,?,?,?)";
        pdo_execute($sql,$content,$time,$id_product,$id_user);
    }
    
    // Update Bình luận 
    function comment_update($content,$time,$id_product,$id_user,$id){
        $sql = "UPDATE comments SET content = ?,time = ?, id_product = ?, id_user = ? WHERE id = ?";
        pdo_execute($sql,$content,$time,$id_product,$id_user,$id);
    }

    // Xóa Bình luận
    function comment_delete($id){
        $sql = "DELETE FROM comments WHERE id=?";
        pdo_execute($sql,$id);
    }
?>